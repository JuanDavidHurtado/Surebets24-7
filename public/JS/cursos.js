document.addEventListener('DOMContentLoaded', function () {
// listar cursos
    var tableBody = document.querySelector('.table.table-striped tbody');
    if (tableBody) {
        fetch('/api/lista_curso',
        { 
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }
           
        
        }) // Asegúrate de que la URL es correcta y tiene el prefijo '/api' si es necesario
        .then(response => {
                    if (!response.ok) {
                        // Si la respuesta no es 200 OK, lanza un error
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                   
                    return response.json(); // Convierte la respuesta en JSON
        })
        .then(data => {
                    document.querySelector('#message-noFound').classList.add('d-none')
                    // Aquí manejas la respuesta. Por ejemplo, podrías llenar una tabla con los datos.
                    const tableBody = document.querySelector('.table.table-striped tbody');
                    tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
                    data.forEach((curso, index) => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${index + 1}</td>
                            <td>${curso.curNombre}</td>
                            <td>${curso.curValor}</td>
                            <td><span class="badge ${curso.curEstado === 'ACTIVO' ? 'bg-success' : 'bg-warning'}">${curso.curEstado}</span>
                            <button type="button" class="btn btn-sm  payoutHistoryBtn"     
                                    data-bs-toggle="modal" data-bs-target="#editEstadoModal"
                                    data-id="${curso.idCurso}"
                                    data-estado="${curso.curEstado}"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Editar estado">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button> 
                            
                            
                            </td>
                            <td>
                                <button type="button"  class="btn btn-sm infoButton payoutHistoryBtn" data-bs-toggle="modal" 
                                data-bs-target="#curso_id" data-id="${curso.idCurso}"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Información del contenido">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                </button>&nbsp
                                <button type="button" class="btn btn-sm addContentBtn payoutHistoryBtn"     
                                data-id="${curso.idCurso}"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Adicionar contenido">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>  
                            </td>
                        `;
                        tableBody.appendChild(row);
                    });
                    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl);
                });

                    // Agregar controlador de eventos a los botones de información después de que se hayan creado
                    // Adjuntar un evento de clic a cada botón infoButton
                    tableBody.querySelectorAll('.infoButton').forEach(button => {
                        button.addEventListener('click', function() {
                            var cursoId = this.getAttribute('data-id');
                            // Llamar a la API para obtener los contenidos del curso

                            fetch('/api/lista_contenido/' + cursoId)
                                .then(response => {
                                    if (!response.ok) {
                                        throw new Error('Network response was not ok');
                                    }
                                    return response.json();
                                })
                                .then(contenidos => {
                                    
                                    if(Array.isArray(contenidos) && contenidos.length > 0){
                                        document.querySelector('.table.table-striped').classList.add('d-none');
                                        document.querySelector('#search-bar').classList.add('d-none');
                                        document.querySelector('#tabla-contenido-curso').classList.remove('d-none');
                                        document.querySelector('#return_listar_cursos').classList.remove('d-none');
                                        // Aquí actualizas la tabla de contenidos con los nuevos datos
                                        const contenidoTableBody = document.querySelector('#tabla-contenido-curso tbody');
                                        contenidoTableBody.innerHTML = '';
                                        contenidos.forEach((contenido, index) => {
                                            const contenidoRow = document.createElement('tr');
                                            contenidoRow.innerHTML = `
                                                <td>${index + 1}</td>
                                                <td>${contenido.curNombre}</td>
                                                <td>${contenido.conNombre}</td>
                                                <td>${contenido.conNombre}</td>
                                               
                                            `;
                                            contenidoTableBody.appendChild(contenidoRow);
                                        });
                                    }else{
                                        showMessage('El Curso no tiene contenido');

                                    }

                                    
                                })
                                .catch(error => {
                                    console.error('Error fetching content data: ', error);
                                });
                        });
                    });

                    // Asegúrate de que este código se ejecuta después de que se hayan creado los botones.
                    tableBody.querySelectorAll('.addContentBtn').forEach(button => {
                        button.addEventListener('click', function() {
                            var cursoId = this.getAttribute('data-id');
                            window.location.href = `/curso/contenido/agregar/${cursoId}`; // Modifica esta línea con la URL correcta si es necesario
                        });
                    });

        })
        .catch(error => {
                    // Aquí manejas cualquier error que ocurra durante la petición
                    console.error('Error fetching data: ', error);
        });

        // Obtén el elemento del campo de búsqueda
        const searchInput = document.getElementById('searchInput');
        // Añade un controlador de eventos para el input de búsqueda
        if(searchInput){
            searchInput.addEventListener('keyup', function() {
                let searchTerm = searchInput.value.toLowerCase();
    
                // Obtiene todas las filas de la tabla
                const rows = document.querySelectorAll('.table.table-striped tbody tr');
    
                rows.forEach(row => {
                    // Asume que el nombre del curso está en la segunda columna (ajusta el índice de la celda según sea necesario)
                    const curso = row.cells[1].textContent.toLowerCase();
                    if (curso.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        }
             
    }

    //agregar contenido
    var formAgregarContenido = document.getElementById('agregarContenidoForm');
     if (formAgregarContenido) {
       
            var button = formAgregarContenido.querySelector('button[type="submit"]');
            var buttonSpinner = document.getElementById('buttonSpinner');
            var successAlert = document.getElementById('successAlert'); // Asegúrate de que este elemento existe en el modal
            var errorAlert = document.getElementById('errorAlert'); // Asegúrate de que este elemento existe en el modal
            $('#addFundModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Botón que disparó el modal
                var courseId = button.data('id'); // Extrae el dato del atributo data-id del botón
                // Si tienes un campo oculto para el id del curso en tu formulario, establece el valor aquí
                var modal = $(this);
                modal.find('.modal-body input[name="id_curso"]').val(courseId); // Ajusta el selector según tu HTML
            });
            // Cuando el DOM esté listo, inicializar los tooltips
            formAgregarContenido.addEventListener('submit', function(e) {
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
                fetch('/api/agregar_contenido', { // Asegúrate de que esta URL sea correcta y accesible en tu aplicación
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Server responded with a status: ' + response.status);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.message) {
                        successAlert.textContent = data.message;
                        successAlert.classList.remove('d-none');
                    }
                    // Cierra el modal después de un pequeño retraso para permitir que el usuario vea el mensaje
                    setTimeout(function() {
                        $('#addFundModal').modal('hide'); // Usa jQuery para cerrar el modal, ajusta el ID del modal si es necesario
                        successAlert.classList.add('d-none'); // Opcional: Oculta el alerta para el próximo uso
                        // Limpia el valor del campo de entrada del nombre
                        document.getElementById('nombre').value = ''; 
                    }, 2000);
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

    // agregar curso
    var formAgregarCurso = document.getElementById('agregarCursoForm');
    // Verificar si el formulario existe para evitar errores en páginas donde no esté presente
    if (formAgregarCurso) {
        var successAlert = document.getElementById('successAlert');
        var mensajeCurso = document.getElementById('mensajeCurso')
        // Añade un event listener para el evento 'submit'
        formAgregarCurso.addEventListener('submit', function(e) {
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
            fetch('/api/agregar_curso', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                button.disabled = false; // Habilitar el botón
                buttonSpinner.classList.add('d-none'); // Ocultar el spinner en el botón
                if (!response.ok) {
                    throw new Error('Error en la respuesta del servidor');
                }
                return response.json();
            })
            .then(data => {
                // Aquí manejas la respuesta exitosa
                console.log(data);
                // Mostrar la alerta de éxito
                if (successAlert) {
                    // El elemento existe, podemos proceder a usarlo
                    successAlert.textContent = data.message;
                    mensajeCurso.classList.remove('d-none');

                } else {
                    // El elemento no existe, podrías mostrar un mensaje de error o manejarlo de otra manera
                    console.error('El elemento successAlert no existe en esta página.');
                }
                 
                // Restablecer el botón y el formulario si es necesario
                if (button && buttonSpinner && formAgregarCurso) {
                    console.log("dentro de rest form")
                    button.disabled = false;
                    buttonSpinner.classList.add('d-none');
                    formAgregarCurso.reset();
                }
                // Redireccionar después de un corto período de tiempo
                setTimeout(function() {
                    window.location.href = '/curso/lista';
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

   // editar estado curso: importa datos id,estado al modal
   var editModal = document.getElementById('editEstadoModal');
    if(editModal){
        editModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var idCurso = button.getAttribute('data-id');
            var curEstado = button.getAttribute('data-estado');
            var spanEstado = document.getElementById('spanEstado');
            // Actualiza los valores del formulario
            document.getElementById('id').value = idCurso;
            if (curEstado === 'ACTIVO'){
            document.getElementById('estado').value = "INACTIVO";
            spanEstado.textContent = "INACTIVO";
            }else{
            document.getElementById('estado').value = "ACTIVO";
            spanEstado.textContent = "ACTIVO";
            }
            
        });
    }
   var editEstadoCursoForm = document.getElementById('editEstadoCursoForm');
   if(editEstadoCursoForm){
    
    var button = editEstadoCursoForm.querySelector('button[type="submit"]');
    var buttonSpinnerEstado = document.getElementById('buttonSpinnerEstado');
    var successAlertEstado = document.getElementById('successAlertEstado'); // Asegúrate de que este elemento existe en el modal
    var errorAlertEstado = document.getElementById('errorAlertEstado');
    editEstadoCursoForm.addEventListener('submit', function(e) {
        e.preventDefault();
        button.disabled = true;
        if (buttonSpinnerEstado) {
            buttonSpinnerEstado.classList.remove('d-none');
        } else {
            console.error('buttonSpinner not found');
        }
        successAlertEstado.classList.add('d-none');
        errorAlertEstado.classList.add('d-none');
        var formData = new FormData(this);
        var id = formData.get('id');
        var estado = formData.get('estado');
        console.log('id:', id, 'estado:', estado);
           // Enviar la solicitud PUT al servidor
           fetch('/api/actualizar_curso', { // Asegúrate de que esta URL sea correcta y accesible en tu aplicación
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                button.disabled = false;
                buttonSpinnerEstado.classList.add('d-none');
                if (data.message) {
                    successAlertEstado.textContent = data.message;
                    successAlertEstado.classList.remove('d-none');
                }
                setTimeout(function() {
                    $('#editEstadoModal').modal('hide');
                    window.location.href = '/curso/lista';
                }, 2000);
               
            })
            .catch(error => {
                button.disabled = false;
                buttonSpinnerEstado.classList.add('d-none');
                errorAlertEstado.textContent = 'Error: ' + error;
                errorAlertEstado.classList.remove('d-none');
            });
       
    });

   }

    // Selecciona el botón usando la clase que le agregaste
    var closeButton = document.querySelector('#buttonMensajeAlert');
    // Asegúrate de que el botón existe antes de agregar el manejador de eventos
    if (closeButton) {
        closeButton.addEventListener('click', function() {
            // Selecciona el elemento de alerta que deseas ocultar
            var alertMessage = document.getElementById('mensajeCurso');
            if (alertMessage) {
                // Agrega la clase 'd-none' para ocultar la alerta
                alertMessage.classList.add('d-none');
            }
        });
    }
});

function showMessage(message) {
    // Actualiza el contenido del mensaje
    document.getElementById('messageContent').textContent = message;
    
    // Muestra el modal
    var messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
    messageModal.show();
  }
  
