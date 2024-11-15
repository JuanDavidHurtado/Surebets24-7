import { actualizarPaginacion, cargarDatosOriginales } from "../paginacion/paginacion.js";

document.addEventListener('DOMContentLoaded', function () {

    var idUsuario = localStorage.getItem('id')
    var successAlert = document.getElementById('successAlert');
    var errorAlert = document.getElementById('errorAlert');
    let originalData = []; // Almacena los datos originales sin filtrar
    const tableBody = document.querySelector('.table.table-striped tbody');
    var msjCheckboxReferido = document.getElementById('msjCheckboxReferido');
    const usuInvAlert = document.getElementById('usuInvAlert');


    listar_referido();

    // Obtener el botón de cerrar modal
    var closeButton = document.querySelector('#AsignarPosicionModal .close-btn');

    // Agregar un event listener al botón de cerrar modal
    if (closeButton) {
        closeButton.addEventListener('click', function () {
            var asignarPosicion = document.querySelector("#formAsignarPosicion");
            if (asignarPosicion) {
                asignarPosicion.reset();
            }
            var successAlert = document.getElementById('successAlert');
            if (successAlert) {
                successAlert.classList.add('d-none');
            }
            var errorAlert = document.getElementById('errorAlert');
            if (errorAlert) {
                errorAlert.classList.add('d-none');
            }
        });
    }

    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.data.forEach((referido, index) => {
            const row = document.createElement('tr');
            row.style.backgroundColor = '#444746';
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${referido.usuFecRegistro}</td>
                <td>${referido.rolNombre}</td>
                <td>${referido.usuNombre + ' ' + referido.usuApellido}</td>
                <td>${referido.usuCorreo + '<br>' + referido.usuTelefono}</td>
                <td><span class="badge ${referido.estNombre === 'ACTIVO' ? 'bg-success' : 'bg-danger'}">${referido.estNombre}</span></td>
                <td>
                    ${referido.estado === 'ANULADO' ? `
                    <button type="button" class="badge bg-primary asignar-posicion-btn" 
                    data-bs-toggle="modal" data-bs-target="#AsignarPosicionModal" 
                    data-id="${referido.idUsuario}" data-bs-toggle="tooltip" data-bs-placement="top">Asignar Posición</button>
                    ` : `
                    <span class="badge bg-secondary">Usuario con nodo asignado</span>
                    `}
                </td>
                `;
            tableBody.appendChild(row);
        });
        // actualizarPaginacion(data,  '.table.table-striped tbody', fillTableWithData);
        actualizarPaginacion(data, '.table.table-striped tbody', fillTableWithData, (data) => {
            originalData = data; // Actualiza originalData con los nuevos datos de paginación
        });

        const asignarPosicionBtns = document.querySelectorAll('.asignar-posicion-btn');
        asignarPosicionBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const referidoId = this.getAttribute('data-id');

                //alert(referidoId)
                document.getElementById('id').value = btoa(referidoId); // Asigna el id al input oculto

                //let idUsr = localStorage.getItem('id');
                fetch('/api/pro_usu/' + idUsuario,
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
                            throw new Error('Network response was not ok ' + response.statusText);

                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log("id pro usu", idUsuario, "pro usu", data.data);
                        if (data.data.length > 0) {
                            submitAgregarUserReferidoForm();
                        } else {
                            displayInvitationAlert();
                        }

                    })
                    .catch(error => {
                        console.error('Error fetching data: ', error);
                    });
            });
        });
    }

    function displayInvitationAlert() {
        //const usuInvAlert = document.getElementById('usuInvAlert');
        if (usuInvAlert) {
            usuInvAlert.innerHTML = ' Por favor realice una inversión para poder referir a otro usuario';
            usuInvAlert.classList.remove("d-none");
        }
    }

    function displayMsjCheckboxReferido() {
        //var msjCheckboxReferido = document.getElementById('msjCheckboxReferido');
        if (msjCheckboxReferido) {
            msjCheckboxReferido.innerHTML = 'No tiene posiciones disponibles';
            msjCheckboxReferido.classList.remove('d-none')
        }

    }


    function submitAgregarUserReferidoForm() {

        //console.log('Hay Nodos');

        var asignarPosicion = document.querySelector("#formAsignarPosicion");
        var buttonPosicionUsr = document.getElementById('buttonUsrPosicion');

        if (buttonPosicionUsr) {
            // buttonPosicionUsr.addEventListener('click', function () {
            //idPatrocinador = localStorage.getItem('id')
            // Configurar el cuerpo de la solicitud

            fetch(`/api/buscar_posicion_ref/${idUsuario}`, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                // body: JSON.stringify(requestBody)    
            }).then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
                .then(data => {
                    // Manejar la respuesta

                    var posicionesDisponibles = data.posiciones_disponibles;
                    var posicionesDisponiblesElement = document.getElementById('posicionesDisponibles');
                    console.log("posiciones disponibles", posicionesDisponibles);
                    if (posicionesDisponibles.length > 0) {
                        msjCheckboxReferido.classList.add('msjCheckboxReferido');
                        posicionesDisponiblesElement.innerHTML = '';

                        // Mostrar checkbox para cada posición disponible
                        posicionesDisponibles.forEach(function (posicion) {

                            var checkboxContainer = document.createElement('div');
                            checkboxContainer.classList.add('checkbox-container-nodo'); // Agrega la clase para aplicar estilos
                            var checkbox = document.createElement('input');
                            checkbox.type = 'checkbox';
                            checkbox.name = 'posicion_disponible';
                            checkbox.value = `${posicion.nivel}:${posicion.posicion}:${posicion.userInvId}:${posicion.usuLogin}`;
                            // Agregar evento de clic para actualizar el campo oculto
                            checkbox.addEventListener('click', function () {
                                // Desmarcar los otros checkboxes cuando se selecciona uno nuevo
                                var checkboxes = document.getElementsByName('posicion_disponible');
                                checkboxes.forEach(function (cb) {
                                    if (cb !== checkbox) {
                                        cb.checked = false;
                                    }
                                });

                            });

                            document.getElementById("posicionesDisponibles").appendChild(checkbox);
                            var label = document.createElement('label');
                            label.style.marginBottom = '0px';
                            label.appendChild(document.createTextNode(` ${posicion.usuLogin}-${posicion.posicion.substring(0, 3)} (Nivel ${posicion.nivel})`));
                            //label.appendChild(document.createTextNode(` ${posicion.usuNombre}-${posicion.posicion} (Nivel ${posicion.nivel})`));
                            checkboxContainer.appendChild(checkbox);
                            checkboxContainer.appendChild(label);
                            posicionesDisponiblesElement.appendChild(checkboxContainer);
                        });

                    } else {
                        displayMsjCheckboxReferido()
                    }
                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                });
        }



        if (asignarPosicion) {
            var button = asignarPosicion.querySelector('button[type="submit"]');
            var buttonSpinner = document.getElementById('buttonSpinner');
            //var errorAlert = document.getElementById('errorAlert');

            asignarPosicion.addEventListener('submit', function (e) {
                e.preventDefault();

                //successAlert.classList.add('d-none');
                //errorAlert.classList.add('d-none');

                button.disabled = true;
                buttonSpinner.classList.remove('d-none');


                var formData = new FormData(this);


                if (!formData.get('posicion_disponible')) {
                    buttonSpinner.classList.add('d-none');
                    errorAlert.textContent = 'Por favor seleccione la  posicion del usuario referido';
                    errorAlert.classList.remove('d-none');
                    button.disabled = false;
                    return;

                }

                //formData.append('nodo_padre', idUsuario);

                var tiempoMinimoVisualizacion = 2000;

                // Mostrar el spinner mientras se procesa la solicitud
                document.getElementById('loading').style.display = 'block';

                setTimeout(function () {
                    fetch('/api/rea_nod', {
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
                                button.disabled = false;

                                throw new Error('Server responded with a status: ' + response.status);

                            }
                            return response.json();
                        })
                        .then(data => {


                            if (data.status == 200) {

                                button.disabled = false;
                                asignarPosicion.reset();
                                $('#AsignarPosicionModal').modal('hide');
                                listar_referido();
                                successAlert.textContent = data.message;
                                successAlert.classList.remove('d-none');

                            } else {
                                errorAlert.textContent = data.message;
                                errorAlert.classList.remove('d-none');
                                return;
                            }

                            // Ocultar el spinner después de recibir la respuesta
                            document.getElementById('loading').style.display = 'none';

                        })
                        .catch(error => {

                            console.log('Error: ' + error.message);
                            errorAlert.textContent = 'Error: ' + error.message;
                            errorAlert.classList.remove('d-none');
                            // Ocultar el spinner después de recibir la respuesta
                            document.getElementById('loading').style.display = 'none';
                        })
                        .finally(() => {
                            button.disabled = false;
                            buttonSpinner.classList.add('d-none');
                        });
                }, tiempoMinimoVisualizacion);
            });
        }
    }


    async function restoreOriginalData() {
        /*var dataOriginal;
        if (originalData && originalData.links) {
            const originalDataUrl = originalData.links.find(link => link.active).url;
            // Luego puedes usar esta URL en tu función cargarDatos si es necesario
            dataOriginal = await cargarDatosOriginales(originalDataUrl);
        }

        fillTableWithData(dataOriginal);*/

        if (originalData && originalData.links) {
            const originalDataUrl = originalData.links.find(link => link.active).url;
            const dataOriginal = await cargarDatosOriginales(originalDataUrl);
            fillTableWithData(dataOriginal);
        }
    }

    function listar_referido() {

        // Utiliza la función fetch para realizar la petición fecth
        fetch('/api/lista_referido/' + idUsuario,
            {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                }

            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {

                //console.log(data.data);
                if (data.data.length > 0) {
                    originalData = data; // Almacena los datos originales
                    fillTableWithData(data); // Llena la tabla con los datos originales
                    // actualizarPaginacion(data,  '.table.table-striped tbody', fillTableWithData);
                    actualizarPaginacion(data, '.table.table-striped tbody', fillTableWithData, (data) => {
                        originalData = data; // Actualiza originalData con los nuevos datos de paginación
                    });
                } else {
                    const noDataMessage = document.createElement('tr');
                    noDataMessage.innerHTML = '<td colspan="7"><center>No hay registro de referidos en el sistema en este momento.</center></td>';
                    tableBody.appendChild(noDataMessage);
                }
            })
            .catch(error => {
                console.error('Error fetching data: ', error);
            });

    }

    // Agrega un evento de entrada al campo de búsqueda
    const filterField = document.getElementById('filterStartName');

    filterField.addEventListener('input', function () {
        const searchValue = filterField.value.toLowerCase();

        if (searchValue === '' || searchValue.trim() === '') {
            // Si el campo de búsqueda está vacío, restaura los datos originales
            restoreOriginalData();

        } else {
            // Realiza la búsqueda y muestra los resultados filtrados
            /*const filteredData = originalData.data.filter(referido =>
                (referido.usuNombre + ' ' + referido.usuApellido).toLowerCase().includes(searchValue)
            );
            const updatedData = { ...originalData, data: filteredData };
            fillTableWithData(updatedData);*/

            if (originalData && originalData.data) { // Asegura que originalData y originalData.data estén definidos

                const filteredData = originalData.data.filter(referido =>
                    (referido.usuNombre + ' ' + referido.usuApellido).toLowerCase().includes(searchValue)
                );
                const updatedData = { ...originalData, data: filteredData };
                fillTableWithData(updatedData);
            }
        }

    });

});



/*var modal = document.getElementById('AsignarPosicionModal');
modal.addEventListener('hidden.bs.modal', function () {
    // Limpiar el formulario al cerrar el modal
    asignarPosicion.reset();
    // También puedes ocultar cualquier mensaje de alerta aquí si es necesario
    document.getElementById('successAlert').classList.add('d-none');
    document.getElementById('errorAlert').classList.add('d-none');
});*/
