document.addEventListener('DOMContentLoaded', function () {
    var cardProductos = document.querySelector("#card_productos");
    var actualizarProd = document.querySelector('#actualizarProductoForm');
    var agregarProducto = document.querySelector('#agregarProductoForm');

    var imagenesPorProducto = {
        "Novato": "63b2b750d51921672656720.png",
        "Principiante": "63b2b7599a21e1672656729.png",
        "Intermedio": "63b2b76e4ab6b1672656750.png",
        "Superior": "63b2b77635d571672656758.png",
        "Experto": "63b2b77635d571672656758.png" // Asumiendo que esta es la imagen correcta para "Experto"
    };
    if (cardProductos) {
        fetch('/api/lista_producto/',
        { 
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }
        }
        )
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(productos => {
            // Comenzar una nueva fila
            console.log(productos)
            let contentHtml = '<div class="row g-4 mb-4">';
    
            productos.forEach((producto, index) => {
                // Cerrar la fila anterior y comenzar una nueva cada 4 productos
                if (index > 0 && index % 4 === 0) {
                    contentHtml += '</div><div class="row g-4 mb-4">';
                }
                
                // let imagenNombre = imagenesPorProducto[producto.invNombre] || '63b2b750d51921672656720.png';
                // let rutaImagen = assetBaseUrl + "uploads/rank/" + imagenNombre;
                let imagenBase64 = '';
                if (producto.imagen) {
                    imagenBase64 = producto.imagen;
                }
                let rutaImagen1 = producto.imagen ? `data:image/*;base64,${imagenBase64}`: assetBaseUrl + 'uploads/rank/63b2b750d51921672656720.png';  
                
                // let rutaImagen = producto.imagen ? 'data:image/*;base64,' + producto.imagen : assetBaseUrl + 'uploads/rank/63b2b750d51921672656720.png';
                // Agregar la tarjeta de producto
                contentHtml += `
                    <div class="col-xl-3 col-md-6 box">
                        <div class="badge-box" style="background-color:#444746">

                            <img src="${rutaImagen1}" alt="${producto.invNombre}" style="width: 80px; height: 80px; border-radius: 50%;">
                            <h3>${producto.invNombre}</h3>
                            <p>Detalle de renta</p>
                            <div class="text-start">
                                <h5>Valor: <span>$${producto.invValor}</span></h5>
                                <h5>Valor diario: <span>$${producto.invValorDiario}</span></h5>
                                <h5>Tiempo: <span>${producto.invDias} Dia(s)</span></h5>
                                <h5>Puntos: <span>${producto.invPunto}</span></h5>
                                <h5>Ganancia Neta: <span>${producto.invGanancia}</span></h5>
                                <h5>Comision Directo: <span>${producto.invPorcentajeComision} %</span></h5>
                                <h5>Estado: <span>${producto.invEstado}</span></h5>
                            </div>
                            <button class="btn btn-primary update-btn" style="width: 100%; margin-top: 10px;" data-id="${producto.idInversion}">
                            Actualizar
                        </button>
                        </div>
                    </div>`;
            });
    
            // Cerrar la última fila
            contentHtml += '</div>';
    
            // Insertar todo el contenido HTML de una vez
            cardProductos.innerHTML = contentHtml;

            // Agregar controlador de eventos a los botones de actualización
            const updateButtons = document.querySelectorAll('.update-btn');
            updateButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productoId = this.getAttribute('data-id');
                    actualizarProducto(productoId);
                });
            });
        })
        .catch(error => {
            console.error('Error fetching product data: ', error);
        });
    }


    
   // agregar producto o inversion
  
    if (agregarProducto){
        var errorAlert = document.getElementById('errorAlert');
        var mensajeProducto = document.getElementById('mensajeProducto')
        // Añade un event listener para el evento 'submit'
        agregarProducto.addEventListener('submit', function(e) {
            // Previene el comportamiento por defecto del formulario (envío directo)
            e.preventDefault();  

            // Deshabilita el botón de envío para evitar múltiples envíos
            var button = this.querySelector('button[type="submit"]');
            button.disabled = true;
            
            // Muestra un spinner o algún indicativo de carga
            var buttonSpinner = document.getElementById('buttonSpinner');
            buttonSpinner.classList.remove('d-none');
            
            // Crea un objeto FormData con los datos del formulario
            var formData = new FormData(this);
            
             // Agregar la imagen al formData
            var imagenInput = document.getElementById('imagen');
            var files = imagenInput.files;
            if (files.length > 0) {
                formData.append('imagen', files[0]);
            }

            // Aquí puedes hacer lo que necesites con formData, como enviarlo a un servidor
            // Por ejemplo, una petición fetch a una API
            fetch('/api/agregar_producto', {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => {
                button.disabled = false; // Habilitar el botón
                buttonSpinner.classList.add('d-none'); // Ocultar el spinner en el botón
                if (!response.ok) {
                    errorAlert.textContent='error al agregar producto'
                    errorAlert.classList.remove('d-none');
                     // Ocultar el mensaje después de 3 segundos (3000 milisegundos)
                    setTimeout(() => {
                        errorAlert.classList.add('d-none');
                    }, 3000);

                    throw new Error('Error en la respuesta del servidor');
                }
                return response.json();
            })
            .then(data => {
                // Aquí manejas la respuesta exitosa
                // Mostrar la alerta de éxito
               
                mensajeProducto.classList.remove('d-none');
                // Restablecer el botón y el formulario si es necesario
                if (button && buttonSpinner && agregarProducto) {
                    button.disabled = false;
                    buttonSpinner.classList.add('d-none');
                    agregarProducto.reset();
                }
                // Redireccionar después de un corto período de tiempo
                setTimeout(function() {
                    window.location.href = '/producto/listar';
                }, 2000);
            })
            .catch(error => {
                // Aquí manejas cualquier error que ocurra durante el envío
                console.error('Error:', error);
                button.disabled = false;
                buttonSpinner.classList.add('d-none');
            });
        });
    }

     // Selecciona el botón usando la clase que le agregaste
     var closeButton = document.querySelector('#buttonMensajeAlert');
     // Asegúrate de que el botón existe antes de agregar el manejador de eventos
     if (closeButton) {
         closeButton.addEventListener('click', function() {
             // Selecciona el elemento de alerta que deseas ocultar
             var alertMessage = document.getElementById('mensajeUserFerido');
             if (alertMessage) {
                 // Agrega la clase 'd-none' para ocultar la alerta
                 alertMessage.classList.add('d-none');
             }
         });
     }
     
     if(actualizarProd){
        // Obtener la URL actual
        const urlParams = new URLSearchParams(window.location.search);

        // Obtener los valores de los parámetros de la URL
        const idInversion = urlParams.get('producto[idInversion]');
        const invNombre = urlParams.get('producto[invNombre]');
        const invValor = urlParams.get('producto[invValor]');
        const invValorDiario = urlParams.get('producto[invValorDiario]');
        const invDias = urlParams.get('producto[invDias]');
        const invPunto = urlParams.get('producto[invPunto]');
        const invGanancia = urlParams.get('producto[invGanancia]');
        const invPorcentajeComision = urlParams.get('producto[invPorcentajeComision]');
       

        // Establecer los valores en los campos del formulario

        document.getElementById('nombre').value = invNombre;
        document.getElementById('valor').value = invValor;
        document.getElementById('valor_diario').value = invValorDiario;
        document.getElementById('ganancia').value = invGanancia;
        document.getElementById('dias').value = invDias;
        document.getElementById('puntos').value = invPunto;
        document.getElementById('comision').value = invPorcentajeComision;
        document.getElementById('imagen').value = ''; // El campo de la imagen podría necesitar un manejo especial, ya que no puedes establecer el valor directamente

        actualizarProd.addEventListener('submit', function(e) {
            // Previene el comportamiento por defecto del formulario (envío directo)
            e.preventDefault();
            var errorAlertAct = document.getElementById('errorAlertUpdate');

            
            console.log("dentro de actualizaprod addeventlistener")

             // Deshabilita el botón de envío para evitar múltiples envíos
             var button = this.querySelector('button[type="submit"]');
             button.disabled = true;
             
             // Muestra un spinner o algún indicativo de carga
             var buttonSpinner = document.getElementById('updateButtonSpinner');
             buttonSpinner.classList.remove('d-none');

            // Obtener los datos del formulario
            const formData = new FormData(actualizarProd);
            

            var formChanged = Array.from(formData.entries()).some(([key, value]) => {
                var originalValue = actualizarProd.elements[key].defaultValue;
                return value !== originalValue;
            });
        
            // Si no hay cambios, mostrar un mensaje de error y evitar enviar la solicitud
            if (!formChanged) {
                errorAlertAct.textContent = 'No hay cambios para actualizar';
                errorAlertAct.classList.remove('d-none');
                setTimeout(() => {
                    errorAlertAct.classList.add('d-none');
                }, 3000);
                return;
            }
            formData.append('idInversion',idInversion);
            for (var pair of formData.entries()) {
                console.log(pair[0]+ ': ' + pair[1]);
            }
            
            
            // Agregar la imagen al formData
              var imagenInput = document.getElementById('imagen');
              var files = imagenInput.files;
              if (files.length > 0) {
                  formData.append('imagen', files[0]);
              }
         

            // Enviar la solicitud fetch
            fetch('/api/actualizar_prod/', {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Accept': 'application/json',
                },
                body: formData,
            })
            .then(response => {
                console.log()
                button.disabled = false; // Habilitar el botón
                buttonSpinner.classList.add('d-none'); // Ocultar el spinner en el botón
                if (!response.ok) {
                   
                    throw new Error('Error en la respuesta del servidor');
                }
                return response.json();
            })
            .then(data => {
                button.disabled = false; // Habilitar el botón
                buttonSpinner.classList.add('d-none'); // Ocultar el spinner en el botón
                // Aquí puedes manejar la respuesta después de actualizar el producto
                alert('Producto actualizado exitosamente');
                window.location.href = '/producto/listar';
            })
            .catch(error => {
                console.error('Error al actualizar el producto: ', error);
                alert('No se realizó cambios');
            });

        });
     }

});

function actualizarProducto(id) {

    console.log("id",id)

    fetch(`/api/obtener_producto/${id}`, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${localStorage.getItem('token')}`,
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        window.location.href = data.redirect_to;
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
        // Manejar errores aquí si es necesario
    });

}