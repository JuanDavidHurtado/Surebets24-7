@extends('layouts/dashboard')

@section('content')
<!-- Incluir las librerías de PDF.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf_viewer.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.entry.min.js"></script>


<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Explora, Aprende, Crece en Nuestra Academia, curso <span id="titulo"></span></h4>
        </div>
        @php
        $id = request('id');
        @endphp
        <input hidden name="id_curso" id="id_curso" value="<?= $id ?>" required>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <section class="faq-section faq-page">
                    <div class="container">
                        <div class="col-lg-12">
                            <div class="accordion" id="accordionExample">
                            </div>
                            <!-- Modal para videos -->
                            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered custom-modal-size" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <video id="videoPlayer" width="100%" height="100%" controls>
                                                <source src="" type="video/mp4">
                                                Tu navegador no soporta la etiqueta video.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal para mostrar el PDF -->
                            <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-full modal-xl modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="pdfModalLabel">Visualizador de PDF</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="pdfContainer" style="width: 100%; text-align:center"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Obtener el valor de ID de tu formulario
        const id = document.getElementById('id_curso').value;
        var id_usu = localStorage.getItem('id');

        // alert(id_usu)


        // Realizar la solicitud Fetch a tu API en api.php
        fetch(`/api/seleccion_curso/${id}/${id_usu}`, {
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
                    // Si la respuesta no es 200 OK, lanza un error
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                // Actualizar el título del curso
                document.getElementById('titulo').textContent = data.data[0].curNombre;

                // Construir el acordeón con la respuesta de la API
                const accordion = document.querySelector('.accordion');
                accordion.innerHTML = ''; // Limpiar el acordeón antes de agregar nuevos datos

                data.resultados.forEach((curso, index) => {
                    // Crear el encabezado del acordeón para cada curso
                    const accordionItem = document.createElement('div');
                    accordionItem.className = 'accordion-item';

                    const accordionHeader = document.createElement('h5');
                    accordionHeader.className = 'accordion-header';
                    accordionHeader.id = `heading${index + 1}`;

                    const accordionButton = document.createElement('button');
                    accordionButton.className = 'accordion-button collapsed';
                    accordionButton.type = 'button';
                    accordionButton.dataset.bsToggle = 'collapse';
                    accordionButton.dataset.bsTarget = `#collapse${index + 1}`;
                    accordionButton.setAttribute('aria-expanded', 'false');
                    accordionButton.setAttribute('aria-controls', `collapse${index + 1}`);
                    accordionButton.innerHTML = `${curso.curso.conNombre}`;

                    accordionHeader.appendChild(accordionButton);
                    accordionItem.appendChild(accordionHeader);

                    // Crear el cuerpo del acordeón para mostrar los materiales
                    const accordionCollapse = document.createElement('div');
                    accordionCollapse.id = `collapse${index + 1}`;
                    accordionCollapse.className = 'accordion-collapse collapse';
                    accordionCollapse.setAttribute('aria-labelledby', `heading${index + 1}`);
                    accordionCollapse.dataset.bsParent = '#accordionExample';

                    const accordionBody = document.createElement('div');
                    accordionBody.className = 'accordion-body';

                    // Agregar tabla para mostrar los materiales
                    const table = document.createElement('table');
                    table.className = 'table table-bordered';

                    // Crear encabezado de la tabla
                    const tableHeader = document.createElement('thead');
                    const headerRow = document.createElement('tr');
                    const headerCell1 = document.createElement('th');
                    headerCell1.textContent = '#';
                    const headerCell2 = document.createElement('th');
                    headerCell2.textContent = 'Nombre';
                    const headerCell3 = document.createElement('th'); // Nuevo encabezado para "Contenido"
                    headerCell3.textContent = 'Contenido';

                    headerRow.appendChild(headerCell1);
                    headerRow.appendChild(headerCell2);
                    headerRow.appendChild(headerCell3); // Agregar la nueva celda para "Contenido"
                    tableHeader.appendChild(headerRow);
                    table.appendChild(tableHeader);

                    const tableBody = document.createElement('tbody');

                    // Recorrer los materiales y construir las filas de la tabla
                    curso.materiales.forEach((material, materialIndex) => {

                        console.log(material.idMaterial)
                        const row = document.createElement('tr');
                        const cell1 = document.createElement('td');
                        const cell2 = document.createElement('td');
                        const cell3 = document.createElement('td'); // Nueva celda para el botón "Ver Material"

                        cell1.textContent = materialIndex + 1;
                        cell2.textContent = material.matNombre;

                        // Agregar el botón "Ver Material"
                        const verMaterialButton = document.createElement('button');
                        verMaterialButton.className = 'btn btn-sm payoutHistoryBtn';

                        /*   const decodedData = atob(material.matArchivo); // Decodificar desde base64
                           const arrayBuffer = new ArrayBuffer(decodedData.length);
                           const uint8Array = new Uint8Array(arrayBuffer);

                           for (let i = 0; i < decodedData.length; i++) {
                               uint8Array[i] = decodedData.charCodeAt(i);
                           }*/

                        verMaterialButton.onclick = function() {
                            try {
                                if (material.matTipoArchivo === ('application/pdf')) {
                                    /* const blob = new Blob([uint8Array], {
                                         type: 'application/pdf'
                                     });
                                     mostrarPDF(uint8Array);*/
                                    // const url = URL.createObjectURL(blob);

                                    var pdfUrl = "/" + material.matArchivo + '_' + material.idMaterial;

                                    mostrarPDF(pdfUrl);

                                    //window.open("/" + material.matArchivo + '_' + material.idMaterial, '_blank'); // Ruta relativa a la carpeta public

                                    // // Abrir el PDF en una nueva ventana sin controles de descarga tipoArchivo.startsWith('video/')
                                    // window.open(url, '_blank');
                                } else {
                                    console.log(material.tipoArchivo);

                                    videoPlayer.src = "/" + material.matArchivo + '_' + material.idMaterial;

                                    // Deshabilitar controles de descarga
                                    videoPlayer.controls = true;

                                    // Reproducir el video
                                    videoPlayer.play();

                                    // Mostrar el modal
                                    $('#videoModal').modal('show');

                                    /*  const blob = new Blob([uint8Array], {
                                          type: material.matTipoArchivo
                                      });

                                      const url = URL.createObjectURL(blob);
                                      const videoPlayer = document.getElementById('videoPlayer');

                                      // Establecer la fuente del reproductor de video
                                      videoPlayer.src = url;

                                      // Deshabilitar controles de descarga
                                      videoPlayer.controls = true;

                                      // Reproducir el video
                                      videoPlayer.play();*/

                                    // Mostrar el modal
                                    //  $('#videoModal').modal('show');
                                }
                            } catch (error) {
                                console.error('Error al abrir el material:', error);
                                alert(console.error('Error al abrir el material:', error))
                            }
                        };


                        verMaterialButton.setAttribute('data-bs-toggle', 'modal');
                        verMaterialButton.setAttribute('data-bs-placement', 'top');
                        verMaterialButton.setAttribute('title', 'Ver material');

                        const icon = document.createElement('i');
                        icon.className = 'fa fa-eye';
                        icon.setAttribute('aria-hidden', 'true');

                        verMaterialButton.appendChild(icon);
                        cell3.appendChild(verMaterialButton);

                        row.appendChild(cell1);
                        row.appendChild(cell2);
                        row.appendChild(cell3); // Agregar la nueva celda para el botón "Ver Material"
                        tableBody.appendChild(row);
                    });

                    table.appendChild(tableBody);
                    accordionBody.appendChild(table);

                    accordionCollapse.appendChild(accordionBody);
                    accordionItem.appendChild(accordionCollapse);

                    accordion.appendChild(accordionItem);
                });
            })
            .catch(error => {
                console.error('Error fetching data: ', error);
            });


        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js';

        /*function mostrarPDF(uint8Array) {
            const blob = new Blob([uint8Array], {
                type: 'application/pdf'
            });
            const url = URL.createObjectURL(blob);

            var loadingTask = pdfjsLib.getDocument(url);
            loadingTask.promise.then(function(pdf) {
                console.log('PDF cargado con ' + pdf.numPages + ' páginas.');

                // Crear una función para renderizar una página específica
                function renderPage(pageNum) {
                    pdf.getPage(pageNum).then(function(page) {
                        var canvas = document.createElement('canvas');
                        var context = canvas.getContext('2d');
                        var viewport = page.getViewport({
                            scale: 1
                        });

                        canvas.height = viewport.height;
                        canvas.width = viewport.width;

                        var renderContext = {
                            canvasContext: context,
                            viewport: viewport
                        };

                        var renderTask = page.render(renderContext);
                        renderTask.promise.then(function() {
                            console.log('Página ' + pageNum + ' renderizada');
                            document.getElementById('pdfContainer').appendChild(canvas);

                            // Mostrar el modal después de renderizar la primera página
                            if (pageNum === 1) {
                                $('#pdfModal').modal('show');
                            }
                        });
                    });
                }

                // Renderizar todas las páginas
                for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
                    renderPage(pageNumber);
                }
            }, function(reason) {
                console.error('Error al abrir el PDF:', reason);
            });
        }*/

        function mostrarPDF(pdfUrl) {
            var loadingTask = pdfjsLib.getDocument(pdfUrl);
            loadingTask.promise.then(function(pdf) {
                console.log('PDF cargado con ' + pdf.numPages + ' páginas.');

                // Crear una función para renderizar una página específica
                function renderPage(pageNum) {
                    pdf.getPage(pageNum).then(function(page) {
                        var canvas = document.createElement('canvas');
                        var context = canvas.getContext('2d');
                        var viewport = page.getViewport({
                            scale: 1
                        });

                        canvas.height = viewport.height;
                        canvas.width = viewport.width;

                        var renderContext = {
                            canvasContext: context,
                            viewport: viewport
                        };

                        var renderTask = page.render(renderContext);
                        renderTask.promise.then(function() {
                            console.log('Página ' + pageNum + ' renderizada');
                            document.getElementById('pdfContainer').appendChild(canvas);

                            // Mostrar el modal después de renderizar la primera página
                            if (pageNum === 1) {
                                $('#pdfModal').modal('show');
                            }
                        });
                    });
                }

                // Renderizar todas las páginas
                for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
                    renderPage(pageNumber);
                }
            }).catch(function(reason) {
                console.error('Error al abrir el PDF:', reason);
            });
        }


    });
</script>
@endsection