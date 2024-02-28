// Función para actualizar la UI de paginación
export function actualizarPaginacion(paginacionData, tableSelector, fillTableCallback, callbackAfterPagination) {    
    const paginationContainer = document.querySelector('.pagination');
    paginationContainer.innerHTML = ''; // Limpiar paginación actual

    // Crear y agregar los enlaces de paginación al contenedor
    paginacionData.links.forEach(link => {
        const pageItem = document.createElement('li');
        pageItem.className = 'page-item';
        if (link.active) pageItem.classList.add('active');
        if (link.url === null) pageItem.classList.add('disabled');

        const pageLink = document.createElement('a');
        pageLink.className = 'page-link';
        pageLink.href = link.url ?? '#';
        pageLink.innerHTML = link.label.includes("Previous") ? '‹‹' : (link.label.includes("Next") ? '››' : link.label);


        pageItem.appendChild(pageLink);
        paginationContainer.appendChild(pageItem);

        // Agregar manejador de eventos para cargar la página correspondiente
        pageLink.addEventListener('click', (e) => {
            e.preventDefault();
            if (link.url) {
              //  cargarCursos(link.url); // Función para cargar cursos de la página seleccionada
            //   cargarDatos(link.url, tableSelector, fillTableCallback);
                cargarDatos(link.url, tableSelector, fillTableCallback, callbackAfterPagination); // Llama a cargarDatos con un nuevo argumento

            }
        });

        if (typeof callbackAfterPagination === 'function') {
            callbackAfterPagination(paginacionData); // Ejecuta el callback después de haber creado la paginación
        }
    });
}

// Función para cargar los datos de la página seleccionada

export    function cargarDatos(url, tableSelector, fillTableCallback, callbackAfterPagination) {
        fetch(url,  {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector(tableSelector);
            tableBody.innerHTML = '';
            fillTableCallback(data, tableBody);
            // actualizarPaginacion(data);
            if (typeof callbackAfterPagination === 'function') {
                callbackAfterPagination(data); // Ejecuta el callback después de obtener los datos
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });
    }



export    async function cargarDatosOriginales(url) {
        try {
            const response = await fetch(url, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                }
            });
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            const data = await response.json();
            return data;
        } catch (error) {
            console.error('Error fetching data: ', error);
            throw error; // Lanzar el error para que sea manejado en restoreOriginalData
        }
    }