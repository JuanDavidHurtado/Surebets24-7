document.addEventListener('DOMContentLoaded', function () {
    // Utiliza la función fetch para realizar la petición AJAX
    fetch('/api/lista_curso_usuario') // Asegúrate de que la URL es correcta y tiene el prefijo '/api' si es necesario
        .then(response => {
            if (!response.ok) {
                // Si la respuesta no es 200 OK, lanza un error
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json(); // Convierte la respuesta en JSON
        })
        .then(data => {
            const cursoCards = document.getElementById('curso-cards');
            // Recorre los productos y genera una tarjeta para cada uno
            data.forEach(curso => {
                const cursoCard = document.createElement('div');
                cursoCard.classList.add('col-xl-4', 'col-md-6', 'box');

                cursoCard.innerHTML = `
        <div class="dashboard-box box-2">
                <h5>${curso.curNombre}</h5>
                <h3><small><sup>$</sup></small>${curso.curValor}</h3>
                <i class="fal fa-box-open"></i>
                <button type="button" class="btn-custom investNow" 
                    onclick="redirect(${curso.idCurso})">Comprar Ahora
                </button>
        </div>
                    `;
                cursoCards.appendChild(cursoCard);
            });
        })
        .catch(error => {
            // Aquí manejas cualquier error que ocurra durante la petición
            console.error('Error fetching data: ', error);
        });
});

