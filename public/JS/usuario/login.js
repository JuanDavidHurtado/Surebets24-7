document.addEventListener('DOMContentLoaded', function () {
    var loginForm = document.querySelector('#loginForm');
    if (loginForm) {
        var button = loginForm.querySelector('button[type="submit"]');
        var buttonSpinner = document.getElementById('buttonSpinner'); // Asegúrate de que este elemento exista
        var successAlert = document.getElementById('successAlert'); // Asegúrate de que este elemento exista
        var errorAlert = document.getElementById('errorAlert'); // Asegúrate de que este elemento exista

        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();

            button.disabled = true;
            buttonSpinner.classList.remove('d-none');

            var formData = new FormData(this);
            fetch('/api/login', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => response.json().then(data => ({ status: response.status, body: data })))
            .then(result => {
                button.disabled = false;
                buttonSpinner.classList.add('d-none');
                console.log(result.body)
            
                if (!result || result.status !== 200) {
                    let errorMessage = result.body.message || 'Error desconocido';
                    errorAlert.textContent = errorMessage;
                    errorAlert.classList.remove('d-none');
            
                    return Promise.reject('Error en la solicitud: ' + result.status);
                }
                // Almacenar el token después de un inicio de sesión exitoso
                localStorage.setItem('token', result.body.token);
                localStorage.setItem('rol', result.body.rol);
                localStorage.setItem('idRol',result.body.idRol);
                localStorage.setItem('idUsuario', result.body.idUsuario);
                localStorage.setItem('nombre', result.body.nombre);
                localStorage.setItem('nivel', result.body.nivel);
                localStorage.setItem('usuario', result.body.usuario);
               


                window.location.href = '/home';
            })
            .catch(error => {
                console.error('Error en la petición:', error);
            });
            
            
        });
    }

    var logout = document.querySelector('#logout');
    if(logout){

        logout.addEventListener('click', function(e){
            fetch('/api/logout', {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                credentials: 'include'
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la solicitud de logout');
                }
                return response.json();
            })
            .then(data => {
                console.log('Logout exitoso:', data.message);
                // Limpiar localStorage
                localStorage.removeItem('token');
                localStorage.removeItem('rol');
                localStorage.removeItem('idUsuario');
                localStorage.removeItem('idRol')
                
                // Redirigir al usuario a la página de inicio de sesión o a la página principal
                window.location.href = '/';
            })
            .catch(error => {
                console.error('Error en logout:', error);
            });
        })
    }
});
