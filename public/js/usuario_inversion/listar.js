document.addEventListener('DOMContentLoaded', function () {
    // Utiliza la función fetch para realizar la petición AJAX
    fetch('/api/lista_inversion',
        {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }

        }
    ) // Asegúrate de que la URL es correcta y tiene el prefijo '/api' si es necesario
        .then(response => {
            if (!response.ok) {
                // Si la respuesta no es 200 OK, lanza un error
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json(); // Convierte la respuesta en JSON
        })
        .then(data => {
            const productCards = document.getElementById('product-cards');
            // Recorre los productos y genera una tarjeta para cada uno
            data.forEach(product => {
                const productCard = document.createElement('div');
                productCard.classList.add('col-xl-4', 'col-md-6', 'box');
                //const baseUrl = 'http://localhost/surebets/public/darkpurple/img/icon/gold-medal.png';

                if (product.imagen) {
                    imagenBase64 = product.imagen;
                }
                let baseUrl = product.imagen ? `data:image/*;base64,${imagenBase64}` : assetBaseUrl + 'uploads/rank/63b2b750d51921672656720.png';


                productCard.innerHTML = `
                        <div class="badge-box" style="background-color:#444746;">
                            <img src="${baseUrl}" alt="" style="max-width: 100px; max-height: 100px;"/>
                            <h3>${product.invNombre}</h3>
                            <p>${product.invNombre}</p>
                            <div class="text-start">
                                <h5>Vlr. Deposito: <span>${product.invValor} USDT</span></h5>
                                <h5>Tiempo: <span>${product.invDias} Dia(s)</span></h5>
                                <h5>Estado: <span>${product.invEstado}</span></h5>
                                <button type="button" class="btn-custom investNow" 
                                    onclick="redirect(${product.idInversion})">
                                    Empezar Ahora
                                </button>
                            </div>
                        </div>
                    `;
                productCards.appendChild(productCard);
            });
        })
        .catch(error => {
            // Aquí manejas cualquier error que ocurra durante la petición
            console.error('Error fetching data: ', error);
        });
});