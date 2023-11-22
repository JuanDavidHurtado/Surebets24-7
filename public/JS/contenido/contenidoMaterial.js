// Función para abrir el modal y cargar el contenido
function abrirModal(idMaterial, tipoArchivo) {
    console.log('id material',idMaterial)
    console.log('tipo archivo',tipoArchivo)

    fetch(`/api/showMaterial/`+ idMaterial,
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
}


document.addEventListener('DOMContentLoaded', function () {
   
 var contenidoMaterial = document.querySelector('#tabla-contenido-material tbody');
 if (contenidoMaterial){
    var path = window.location.pathname;
    var pathParts = path.split('/');
    var contenidoId = pathParts[pathParts.length - 1];
    console.log(contenidoId)
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
    .then(data => {
        // Procesar los datos recibidos
        console.log(data); // Muestra los datos en la consola para depuración
        document.querySelector('#message-noFound').classList.add('d-none')

        if (Array.isArray(data) && data.length > 0) {
         // Limpiar la tabla antes de añadir los nuevos datos
         contenidoMaterial.innerHTML = '';
 
         // Iterar sobre los datos y añadirlos a la tabla
         data.forEach((item, index) => {
             const row = document.createElement('tr');
             row.innerHTML = `
                 <td>${index + 1}</td>
                 <td>${item.curNombre}</td>
                 <td>${item.conNombre}</td>
                 <td>${item.matNombre}</td>
                 <td><button class="btn btn-sm  payoutHistoryBtn" onclick="abrirModal(${item.idMaterial}, '${item.matTipoArchivo}')"
                 data-bs-toggle="modal" data-bs-placement="top" title="Ver material">
                 <i class="fa fa-eye" aria-hidden="true"></i> 
                 </button></td>
             `;
             contenidoMaterial.appendChild(row);
         });
     } else {
         // Mostrar mensaje de "No Data Found"
         const noDataFoundRow = document.getElementById('message-noFound');
         if (noDataFoundRow) {
             noDataFoundRow.style.display = '';
         }
     }
    })
    .catch(error => {
        console.error('Error en la petición:', error);
    });
 }  



});