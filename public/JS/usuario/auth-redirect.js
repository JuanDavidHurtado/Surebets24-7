document.addEventListener('DOMContentLoaded', function () {
    var token = localStorage.getItem('token');
    var idRol = localStorage.getItem('idRol');
    var nombre = localStorage.getItem('nombre');
    var nivel = localStorage.getItem('nivel');
    var usuario = localStorage.getItem('usuario');
   
    if (!token) {
        window.location.href = '/login'; // Asegúrate de que esta sea la ruta correcta a tu página de login
    }
        var nombreUsuario = document.getElementById('nombre_usuario');
        var nivelUsuario = document.getElementById('nivel_usuario');
        var username = document.getElementById('usuario');
        nombreUsuario.innerHTML = nombre;
        nivelUsuario.innerHTML = nivel;
        username.innerHTML = usuario;

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
