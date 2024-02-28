
import { actualizarPaginacion } from "../paginacion/paginacion.js";


document.addEventListener('DOMContentLoaded', function () {
    // Obtener la tabla donde se mostrará el contenido
    var contenidoMaterial = document.querySelector('#tabla-contenido-material tbody');
    if (contenidoMaterial) {
        var path = window.location.pathname;
        var pathParts = path.split('/');
        var contenidoId = pathParts[pathParts.length - 1];

        fetch('/api/lista_material/' + contenidoId, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },

        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la solicitud al servidor: ' + response.statusText);
                }
                return response.json();
            })
            .then(material => {
                // Procesar los datos recibidos
                const messageNoFoundElement = document.querySelector('#message-noFound');

                if (Array.isArray(material.data) && material.data.length > 0) {
                    // Limpiar la tabla antes de añadir los nuevos datos
                    contenidoMaterial.innerHTML = '';
                    // Llenar la tabla con los datos recibidos
                    llenarTablaMaterial(material, contenidoMaterial);
                    actualizarPaginacion(material, '#tabla-contenido-material tbody', llenarTablaMaterial);

                } else {
                    // Mostrar mensaje de "No Data Found"
                    console.log('No se encontraron datos');


                    if (messageNoFoundElement) {
                        if (Array.isArray(material.data) && material.data.length > 0) {
                            // ... Código para procesar los datos
                            messageNoFoundElement.classList.add('d-none');
                        } else {
                            // Mostrar mensaje de "No Data Found"
                            console.log('No se encontraron datos');
                            messageNoFoundElement.classList.remove('d-none');
                        }
                    }

                }
            })
            .catch(error => {
                console.error('Error en la petición:', error);
            });
    }


    document.getElementById('return_listar_contenido').addEventListener('click', function () {
        window.history.back();
    });
});


function llenarTablaMaterial(material, contenidoMaterial) {

    material.data.forEach((item, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
        <td>${index + 1}</td>
        <td>${item.curNombre}</td>
        <td>${item.conNombre}</td>
        <td>${item.matNombre}</td>
        <td><button class="btn btn-sm payoutHistoryBtn" data-idmaterial="${item.idMaterial}" data-tipoarchivo="${item.matTipoArchivo}"
        data-bs-toggle="modal" data-bs-placement="top" title="Ver material">
        <i class="fa fa-eye" aria-hidden="true"></i> 
        </button></td>
        `;
        contenidoMaterial.appendChild(row);
    });

    actualizarPaginacion(material, '#tabla-contenido-material tbody', llenarTablaMaterial);
    // Evento delegado para abrirModal
    contenidoMaterial.addEventListener('click', function (event) {
        if (event.target.closest('.payoutHistoryBtn')) {
            const button = event.target.closest('.payoutHistoryBtn');
            const idMaterial = button.getAttribute('data-idmaterial');
            const tipoArchivo = button.getAttribute('data-tipoarchivo');
            abrirModal(idMaterial, tipoArchivo);
        }
    });

}

function abrirModal(idMaterial, tipoArchivo) {
    fetch(`/api/showMaterial/${idMaterial}`, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${localStorage.getItem('token')}`,
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la solicitud al servidor: ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            const id = data[0].idMaterial;
            const archivo = data[0].matArchivo;
            const tipoArchivo = data[0].matTipoArchivo;

            // Ahora puedes manejar el archivo según su tipo
            if (tipoArchivo === ('video/mp4')) {
                // Para videos, abre el modal y establece la fuente del video
                const videoPlayer = document.getElementById('videoPlayer');
                videoPlayer.src = "/" + archivo + '_' + id; // Usa asset para obtener la URL completa
                $('#videoModal').modal('show');
            } else if (tipoArchivo === 'application/pdf') {
                // Para PDF, abre en una nueva pestaña
                window.open("/" + archivo + '_' + id, '_blank'); // Ruta relativa a la carpeta public

            }
        })
        .catch(error => {
            console.error('Error al cargar el material:', error);
        });
}



/*function abrirModal(idMaterial, tipoArchivo) {


    fetch(`/api/showMaterial/` + idMaterial,
        {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },

        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la solicitud al servidor: ' + response.statusText);
            }
            return response.blob(); // Asumiendo que el controlador devuelve un blob
        })
        .then(blob => {
            // Aquí, asumiendo que es un PDF, podrías crear un objeto URL y mostrarlo en un <iframe> dentro del modal
            const url = URL.createObjectURL(blob);
            // document.getElementById('id-del-iframe-dentro-del-modal').src = url;
            if (tipoArchivo.startsWith('video/')) {
                // Para videos, abre el modal y establece la fuente del video
                const videoPlayer = document.getElementById('videoPlayer');
                videoPlayer.src = url;
                $('#videoModal').modal('show');
            } else if (tipoArchivo === 'application/pdf') {
                // Para PDF, abre en una nueva pestaña
                window.open(url, '_blank');
            }

        })
        .catch(error => {
            console.error('Error al cargar el material:', error);
        });
}*/