import { actualizarPaginacion, cargarDatosOriginales } from "../paginacion/paginacion.js";

document.addEventListener('DOMContentLoaded', function () {
    let originalData = []; // Almacena los datos originales sin filtrar
    // Obtén la referencia al botón
    const tableBody = document.querySelector('.table.table-striped tbody');
    var total_adelanto = 0;


    // Función para llenar la tabla con los datos
    function fillTableWithData(data) {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevos datos
        data.data.forEach((usu_inv, index) => {

            // Calcular la fecha final sin contar los sábados y domingos
            const fechaInicial = new Date(usu_inv.inv_fecha_inicio);
            let diasLaborables = 0;
            const fechaActual = new Date(); // Obtener la fecha actual
            let fec_ini = usu_inv.inv_fecha_inicio;

            //var fec_act = fechaActual.toISOString().slice(0, 10);

            var year = fechaActual.getFullYear();
            var month = (fechaActual.getMonth() + 1).toString().padStart(2,
                '0'); // Sumamos 1 porque los meses van de 0 a 11
            var day = fechaActual.getDate().toString().padStart(2, '0');

            var fec_act = `${year}-${month}-${day}`;


            //console.log(usu_inv.inv_fecha_inicio);
            //console.log(fec_act);

            var acumulado = 0;
            var resumen = '';

            // Verificamos si la fecha actual es mayor que la fecha final
            if ((fec_act > usu_inv.inv_fecha_final) && (usu_inv.usu_inv_estado === 'EN PROCESO' || usu_inv.usu_inv_estado === 'FINALIZADO' || usu_inv.usu_inv_estado === 'ANULADO')) {

                resumen = 'Finalizado'; // Si es mayor, establecemos el texto 'Finalizado'
                total_adelanto = 0;

            } else {

                // Bucle para agregar los días laborables
                while (fec_ini < fec_act) {
                    // Verifica si el día es laborable (lunes a viernes)
                    if (fechaInicial.getDay() !== 0 && fechaInicial.getDay() !== 6) {
                        diasLaborables++;

                    }
                    // Incrementa la fecha en un día
                    fechaInicial.setDate(fechaInicial.getDate() + 1);

                    //fec_ini = `${year_ini}-${month_ini}-${day_ini}`;
                    fec_ini = fechaInicial.toISOString().slice(0, 10);

                    //console.log(fec_ini);
                }

                //console.log("Días laborables pasados:", diasLaborables);

                acumulado = diasLaborables * usu_inv.invValorDiario;

                total_adelanto = acumulado - usu_inv.total_pago;


                resumen = `${diasLaborables} Dia(s)<br> Total $${acumulado}<br>Retiros $${usu_inv.total_pago}<br><span class="badge bg-primary">Saldo $${total_adelanto}</span>`;
                resumen = `${diasLaborables} Dia(s)`;

            }

            // Convertir los valores a números
            const invValor = parseFloat(usu_inv.invValor);
            const invGanancia = parseFloat(usu_inv.invGanancia);
            // Calcular el total
            const total = invValor + invGanancia;
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${usu_inv.inv_fecha_inicio}</td>
                <td><span class="badge bg-success">${usu_inv.inv_fecha_final}</span></td>
                <td>${usu_inv.invNombre + ' ' + usu_inv.invValor + ' USDT ' + usu_inv.invDias
                +
                ' Dias'
                    /*<br>Vl Diario $'
                + usu_inv.invValorDiario*/}</td>
                <td>${usu_inv.invGanancia} USDT</td>
                <td>${resumen}</span></td>
                <td>${total} USDT</td>
                <td>    
                    <button type="button" class="badge bg-primary" 
                        ${usu_inv.usu_inv_estado === 'ANULADO' ? 'disabled' : ''} 
                        onclick="redirect(${usu_inv.id_usu_inv})">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
                <td>
                <span class="badge ${usu_inv.usu_inv_estado === 'FINALIZADO' ? 'bg-success' : usu_inv.usu_inv_estado === 'ANULADO' ? 'bg-danger' : usu_inv.usu_inv_estado === 'EN PROCESO' ? 'bg-primary' : 'bg-warning'}">
                ${usu_inv.usu_inv_estado}</span>
                </td>
                <!--
                <td>
                    ${total_adelanto < 100 || usu_inv.usu_inv_estado !== 'EN PROCESO' ? '---' : '<button disabled type="button" class="badge bg-primary solicitar-adelanto-btn" data-bs-toggle="modal" data-bs-target="#solicitarAdelantoModal" data-id="' + usu_inv.id_usu_inv + '" data-vl-adelanto="' + total_adelanto + '" data-bs-toggle="tooltip" data-bs-placement="top">Retirar</button>'}
                </td>-->
                `;
            tableBody.appendChild(row);
        });
        // actualizarPaginacion(data,  '.table.table-striped tbody', fillTableWithData);
        actualizarPaginacion(data, '.table.table-striped tbody', fillTableWithData, (data) => {
            originalData = data; // Actualiza originalData con los nuevos datos de paginación
        });

        const solicitarAdelantoBtns = document.querySelectorAll('.solicitar-adelanto-btn');
        solicitarAdelantoBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const inversionId = this.getAttribute('data-id');
                document.getElementById('id').value = btoa(inversionId); // Asigna el id al input oculto
            });
        });
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
    // Utiliza la función fetch para realizar la petición fetch
    var id = localStorage.getItem('id')
    fetch('/api/pro_usu/' + id,
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
            //console.log(response);
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {

            //console.log(data);
            if (data.data.length > 0) {
                originalData = data; // Almacena los datos originales
                fillTableWithData(data); // Llena la tabla con los datos originales
                // actualizarPaginacion(data,  '.table.table-striped tbody', fillTableWithData);
                actualizarPaginacion(data, '.table.table-striped tbody', fillTableWithData, (data) => {
                    originalData = data; // Actualiza originalData con los nuevos datos de paginación
                });

            } else {
                const noDataMessage = document.createElement('tr');
                noDataMessage.innerHTML = '<td colspan="10"><center>No hay inversiones registrados en el sistema en este momento.</center></td>';
                tableBody.appendChild(noDataMessage);
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

    // Agrega un evento de entrada al campo de búsqueda
    const filterStartDate = document.getElementById('filterStartDate');

    filterStartDate.addEventListener('input', function () {
        const searchValue = filterStartDate.value.toLowerCase();

        if (searchValue === '' || searchValue.trim() === '') {
            // Si el campo de búsqueda está vacío, restaura los datos originales
            restoreOriginalData();

        } else {
            // Realiza la búsqueda y muestra los resultados filtrados
            /*const filteredData = originalData.data.filter(usu_inv =>
                usu_inv.inv_fecha_inicio.toLowerCase().includes(searchValue)

            );
            const updatedData = { ...originalData, data: filteredData };
            fillTableWithData(updatedData);*/

            if (originalData && originalData.data) { // Asegura que originalData y originalData.data estén definidos

                const filteredData = originalData.data.filter(usu_inv =>
                    usu_inv.inv_fecha_inicio.toLowerCase().includes(searchValue)
                );
                const updatedData = { ...originalData, data: filteredData };
                fillTableWithData(updatedData);
            }
        }
    });


    // agregar curso
    var solicitarAdelantoForm = document.getElementById('solicitarAdelantoForm');
    // Agregar un event listener para el evento 'hidden.bs.modal'
    var modal = document.getElementById('solicitarAdelantoModal');
    modal.addEventListener('hidden.bs.modal', function () {
        // Limpiar el formulario al cerrar el modal
        solicitarAdelantoForm.reset();
        // También puedes ocultar cualquier mensaje de alerta aquí si es necesario
        document.getElementById('successAlert').classList.add('d-none');
        document.getElementById('errorAlert').classList.add('d-none');
    });

    // Verificar si el formulario existe para evitar errores en páginas donde no esté presente
    if (solicitarAdelantoForm) {

        var successAlert = document.getElementById('successAlert');
        var errorAlert = document.getElementById('errorAlert')


        // Añade un event listener para el evento 'submit'
        solicitarAdelantoForm.addEventListener('submit', function (e) {
            // Previene el comportamiento por defecto del formulario (envío directo)
            e.preventDefault();

            // Ocultar todos los mensajes de alerta existentes
            ocultarMensajesAlerta();

            // Obtener el valor de monto dentro del evento de envío del formulario
            const monto = document.getElementById('monto').value.trim();

            if (monto === '') {
                errorAlert.textContent = 'El formulario no puede ir vacío';
                errorAlert.classList.remove('d-none');
                return; // Detiene la ejecución del código y evita el envío del formulario
            }

            if (isNaN(monto)) {
                errorAlert.textContent = 'El monto debe ser un valor numérico';
                errorAlert.classList.remove('d-none');
                return; // Detiene la ejecución del código y evita el envío del formulario
            }


            if (total_adelanto < monto) {
                errorAlert.textContent = 'El monto no puede ser mayor a ' + total_adelanto + ' USDT';
                errorAlert.classList.remove('d-none');
                return; // Detiene la ejecución del código y evita el envío del formulario
            }

            //console.log(total_adelanto + "__");

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
            fetch('/api/agregar_monto', {
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


                    return response.json();
                })
                .then(data => {
                    //alert(data.status)

                    if (data.status === 201) {
                        solicitarAdelantoForm.reset();
                        successAlert.textContent = data.message;
                        successAlert.classList.remove('d-none');


                        setTimeout(function () {
                            $('#solicitarAdelantoModal').modal('hide');
                            window.location.href = '/historial_inversion';
                        }, 4000);

                    } else {
                        errorAlert.textContent = data.message;
                        errorAlert.classList.remove('d-none');
                        button.disabled = false;
                        buttonSpinner.classList.add('d-none');
                    }

                    // Redireccionar después de un corto período de tiempo

                })
                .catch(error => {
                    // Aquí manejas cualquier error que ocurra durante el envío
                    errorAlert.textContent = data.message;
                    errorAlert.classList.remove('d-none');
                    button.disabled = false;
                    buttonSpinner.classList.add('d-none');
                });
        });
    }

    // Función para ocultar todos los mensajes de alerta
    function ocultarMensajesAlerta() {
        successAlert.classList.add('d-none');
        errorAlert.classList.add('d-none');
    }
});
