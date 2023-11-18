document.addEventListener('DOMContentLoaded', function () {
    var cardProductos = document.querySelector("#card_productos");
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
            let contentHtml = '<div class="row g-4 mb-4">';
    
            productos.forEach((producto, index) => {
                // Cerrar la fila anterior y comenzar una nueva cada 4 productos
                if (index > 0 && index % 4 === 0) {
                    contentHtml += '</div><div class="row g-4 mb-4">';
                }
                
                let imagenNombre = imagenesPorProducto[producto.invNombre] || '63b2b750d51921672656720.png';
                let rutaImagen = assetBaseUrl + "uploads/rank/" + imagenNombre;
                // Agregar la tarjeta de producto
                contentHtml += `
                    <div class="col-xl-3 col-md-6 box">
                        <div class="badge-box">

                            <img src="${rutaImagen}" alt="${producto.invNombre}">
                            <h3>${producto.invNombre}</h3>
                            <p>Detalle de inversion</p>
                            <div class="text-start">
                                <h5>% Inversion: <span>${producto.invPorcentaje}%</span></h5>
                                <h5>% de comision: <span>${producto.invPorcentajeComision}%</span></h5>
                                <h5>Valor de inversion: <span>$${producto.invValor}</span></h5>
                            </div>
                        </div>
                    </div>`;
            });
    
            // Cerrar la última fila
            contentHtml += '</div>';
    
            // Insertar todo el contenido HTML de una vez
            cardProductos.innerHTML = contentHtml;
        })
        .catch(error => {
            console.error('Error fetching product data: ', error);
        });
    }
    
   
    var agregarProducto = document.querySelector('#agregarProductoForm');
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
 


});