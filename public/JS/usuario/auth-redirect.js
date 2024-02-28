document.addEventListener('DOMContentLoaded', function () {
    var token = localStorage.getItem('token');
    var id = localStorage.getItem('id');

    if (!token) {
        window.location.href = '/login'; // Asegúrate de que esta sea la ruta correcta a tu página de login
    }else{
    
        fetch(`/api/obtener_usuario/${id}`,
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
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            var nombre = data.usuario.usuNombre + ' ' + data.usuario.usuApellido;
            var nivel_usuario = data.usuario.rolDescripcion;
            var user = data.usuario.usuLogin;
            var idRol = data.usuario.idRol;
            var img_archivo = data.usuario.imgArchivo

             // Aquí manejas los datos recibidos
            var nombreUsuario = document.getElementById('nombre_usuario');
            var nivelUsuario = document.getElementById('nivel_usuario');
            var username = document.getElementById('usuario');
            var perfil_img = document.getElementById('perfil_img');
            nombreUsuario.innerHTML = nombre;
            nivelUsuario.innerHTML = nivel_usuario;
            username.innerHTML = user;
            if(img_archivo){
                perfil_img.src = 'data:image/jpeg;base64,' + img_archivo;
            }else {
                var perfil_img_default = document.getElementById('perfil_img_default')
                perfil_img_default.style.display = 'block';
                perfil_img.style.display = 'none';
            }
    
            var lista1 = document.getElementById('lista1');
            var lista2 = document.getElementById('lista2');
            var inversionA = document.getElementById('inversionA');
            var inversionB = document.getElementById('inversionB');
            var cursoA = document.getElementById('cursoA');
            var cursoB = document.getElementById('cursoB');
    
            if (idRol == 1) {
                lista1.style.display = 'block';
                inversionA.style.display = 'block';
                cursoA.style.display = 'block';
                lista2.style.display = 'none';
                inversionB.style.display = 'none';
                cursoB.style.display = 'none';
            } else {
                lista1.style.display = 'none';
                inversionA.style.display = 'none';
                cursoA.style.display = 'none';
                lista2.style.display = 'block';
                inversionB.style.display = 'block';
                cursoB.style.display = 'block';
                
            }

        })
        .catch(error => {
            console.error('There has been a problem with your fetch operation:', error);
        });

        
    }


});
