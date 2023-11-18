document.addEventListener('DOMContentLoaded', function () {
    var token = localStorage.getItem('token');

    if (!token) {
        window.location.href = '/login'; // Asegúrate de que esta sea la ruta correcta a tu página de login
    }

    var idRol = localStorage.getItem('idRol');
    console.log(idRol)
        var lista1 = document.getElementById('lista1');
        var lista2 = document.getElementById('lista2');

        if (idRol == 1) {
            lista1.style.display = 'block';
            lista2.style.display = 'none';
        } else {
            lista1.style.display = 'none';
            lista2.style.display = 'block';
        }
});
