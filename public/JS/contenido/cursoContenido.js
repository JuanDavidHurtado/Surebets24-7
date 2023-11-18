function updateContentList(cursoId) {
    fetch('/api/lista_contenido/' + cursoId,
        { 
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }

        }
    )
    .then(response => response.json())
    .then(contenidos => {
        const contenidoTableBody = document.querySelector('#tabla-contenido-curso tbody');
        contenidoTableBody.innerHTML = ''; // Limpiar el contenido actual de la tabla
        contenidos.forEach((contenido, index) => {
            const contenidoRow = document.createElement('tr');
            contenidoRow.innerHTML = `
                <td>${index + 1}</td>
                <td>${contenido.curNombre}</td>
                <td>${contenido.conNombre}</td>
                <td>
                <button type="button"  class="btn btn-sm infoContButton payoutHistoryBtn" data-bs-toggle="modal" 
                            data-bs-target="#curso_id" data-id="${contenido.idContenido}"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Información de material">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </button>&nbsp
                   <button type="button" class="btn btn-sm  payoutHistoryBtn"     
                        data-bs-toggle="modal" data-bs-target="#addMaterialModal"
                        data-id="${contenido.idContenido}"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Adicionar contenido">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                    </button> 
                
                </td>
            `;
            contenidoTableBody.appendChild(contenidoRow);
        });
    })
    .catch(error => {
        console.error('Error fetching content data: ', error);
    });
}

function showMessage(message) {
    // Actualiza el contenido del mensaje
    document.getElementById('messageContent').textContent = message;
    
    // Muestra el modal
    var messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
    messageModal.show();
}

document.addEventListener('DOMContentLoaded', function () {
    
    // Obtener la ruta actual
    var path = window.location.pathname;
    var pathParts = path.split('/');
    // Asumiendo que la URL tiene la forma /curso/contenido/agregar/{cursoId}
    // y que {cursoId} es siempre el último segmento de la URL:
    var cursoId = pathParts[pathParts.length - 1];
    
    //listar contenido del curso 
    var tableMaterial = document.querySelector('.table.table-material tbody');
    if (tableMaterial) {
        fetch('/api/lista_contenido/' + cursoId,
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
        .then(contenidos => {
            if(Array.isArray(contenidos) && contenidos.length > 0){
                document.querySelector('#message-noFound').classList.add('d-none')
                // Aquí actualizas la tabla de contenidos con los nuevos datos
                const contenidoTableBody = document.querySelector('#tabla-contenido-curso tbody');
                contenidos.forEach((contenido, index) => {
                    const contenidoRow = document.createElement('tr');
                    contenidoRow.innerHTML = `
                        <td>${index + 1}</td>
                        <td>${contenido.curNombre}</td>
                        <td>${contenido.conNombre}</td>
                        <td>
                            <button type="button"  class="btn btn-sm infoContButton payoutHistoryBtn" data-bs-toggle="modal" 
                            data-bs-target="#curso_id" data-id="${contenido.idContenido}"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Información de material">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </button>&nbsp
                            <button type="button" class="btn btn-sm  payoutHistoryBtn"     
                                data-bs-toggle="modal" data-bs-target="#addMaterialModal"
                                data-id="${contenido.idContenido}"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Adicionar material">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        
                        </td>
                       
                    `;
                    contenidoTableBody.appendChild(contenidoRow);
                });

                // Agregar controlador de eventos a los botones infoContButton
                document.querySelectorAll('.infoContButton').forEach(button => {
                    button.addEventListener('click', function() {
                        var contenidoId = this.getAttribute('data-id');
                        // Navegar a la nueva ruta
                        window.location.href = '/curso/contenido/material/' + contenidoId;
                    });
                });
            }else{
                showMessage('El Curso no tiene contenido');

            }
        
            
        })
        .catch(error => {
            console.error('Error fetching content data: ', error);
        });
    }

    //  actualizar el input oculto cuando se abra el modal
    var addMaterialModal = document.getElementById('addMaterialModal');
    if(addMaterialModal){
        addMaterialModal.addEventListener('show.bs.modal', function (event) {
            // El botón que disparó el modal
            var button = event.relatedTarget;
            // Extrae el data-id del botón
            var idContenido = button.getAttribute('data-id');
            // Actualiza el input oculto del modal con el nuevo idContenido
            var inputIdContenido = addMaterialModal.querySelector('#idContenido');
            inputIdContenido.value = idContenido;
        });
    }
   
    // agregar  contenido de curso
    var agregarContForm = document.querySelector('#agregarconteForm')
    if (agregarContForm) {
        var button = agregarContForm.querySelector('button[type="submit"]');
        var buttonSpinner = document.getElementById('buttonSpinner');
        var mensajeContenido = document.getElementById('mensajeContenidoCurso')
        var successAlert = document.getElementById('successAlert'); // Asegúrate de que este elemento existe en el modal
        var errorAlert = document.getElementById('errorAlert'); // Asegúrate de que este elemento existe en el modal
        // Cuando el DOM esté listo, inicializar los tooltips
        agregarContForm.addEventListener('submit', function(e) {
            e.preventDefault();

            button.disabled = true;
            if (buttonSpinner) {
                 buttonSpinner.classList.remove('d-none');
            } else {
                console.error('buttonSpinner not found');
            }
            successAlert.classList.add('d-none');
            errorAlert.classList.add('d-none');
            var formData = new FormData(this);
            if(cursoId){
                formData.append('id_curso',cursoId)
            }
           
            fetch('/api/agregar_contenido', { // Asegúrate de que esta URL sea correcta y accesible en tu aplicación
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
                if (!response.ok) {
                    errorAlert.textContent = 'Error en la solicitud al servidor ';
                    errorAlert.classList.remove('d-none');
                    throw new Error('Server responded with a status: ' + response.status);
                   
                }
                return response.json();
            })
            .then(data => {
                if (data.message) {
                    successAlert.textContent = data.message;
                    mensajeContenido.classList.remove('d-none')
                }
                // Cierra el modal después de un pequeño retraso para permitir que el usuario vea el mensaje
                setTimeout(function() {
                    $('#addFundModal').modal('hide'); // Usa jQuery para cerrar el modal, ajusta el ID del modal si es necesario
                    mensajeContenido.classList.add('d-none')
                    // Limpia el valor del campo de entrada del nombre
                    document.getElementById('nombre').value = ''; 
                }, 5000);
                updateContentList(cursoId);
            })
            .catch(error => {
                errorAlert.textContent = 'Error: ' + error.message;
                errorAlert.classList.remove('d-none');
            })
            .finally(() => {
                button.disabled = false;
                buttonSpinner.classList.add('d-none');
            });
        });
    }

    // agregar material a contenido
    var agregarMaterialForm = document.querySelector('#agregarMaterialForm')
    if(agregarMaterialForm){
        var button = agregarMaterialForm.querySelector('button[type="submit"]');
        var buttonMaterialSpinner = document.getElementById('buttonMaterialSpinner');
        var successAlert = document.getElementById('successAlertMaterial'); // Asegúrate de que este elemento existe en el modal
        var errorAlert = document.getElementById('errorAlertMaterial');
        agregarMaterialForm.addEventListener('submit', function(e) {
            e.preventDefault();
            button.disabled = true;
            if (buttonMaterialSpinner) {
                 buttonMaterialSpinner.classList.remove('d-none');
            } else {
                console.error('buttonMaterialSpinner not found');
            }
            successAlert.classList.add('d-none');
            errorAlert.classList.add('d-none');
            var formData = new FormData(this);
            
            for (var pair of formData.entries()) {
                console.log(pair[0]+ ', ' + pair[1]); 
            }

            fetch('/api/agregar_material', {
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
                buttonMaterialSpinner.classList.add('d-none'); // Ocultar el spinner en el botón
                if (!response.ok) {
                    throw new Error('Error en la respuesta del servidor');
                }
                return response.json();
            })
            .then(data => {
                // Aquí manejas la respuesta exitosa
                successAlert.textContent = data.message;
                successAlert.classList.remove('d-none');
                setTimeout(() => {
                    successAlert.classList.add('d-none');
                    if (button && buttonMaterialSpinner && agregarMaterialForm) {
                        button.disabled = false;
                        buttonMaterialSpinner.classList.add('d-none');
                        agregarMaterialForm.reset();
                    }
                    $('#addMaterialModal').modal('hide');   
                }, 3000); 
                
               
                
               
            })
            .catch(error => {
                errorAlert.textContent = error.message;
                errorAlert.classList.remove('d-none');
                setTimeout(() => {
                    errorAlert.classList.add('d-none');
                    button.disabled = false;
                    buttonMaterialSpinner.classList.add('d-none');
                }, 3000); // Mensaje visible por 3000 milisegundos (3 segundos)
           
            });

        });
        $(addMaterialModal).on('hidden.bs.modal', function () {
            successAlert.classList.add('d-none');
            errorAlert.classList.add('d-none');
        });
    }

      // Selecciona el botón usando la clase que le agregaste
      var closeButton = document.querySelector('#buttonMensajeAlert');
      // Asegúrate de que el botón existe antes de agregar el manejador de eventos
      if (closeButton) {
          closeButton.addEventListener('click', function() {
              // Selecciona el elemento de alerta que deseas ocultar
              var alertMessage = document.getElementById('mensajeContenidoCurso');
              if (alertMessage) {
                  // Agrega la clase 'd-none' para ocultar la alerta
                  alertMessage.classList.add('d-none');
              }
          });
      }
  
});


