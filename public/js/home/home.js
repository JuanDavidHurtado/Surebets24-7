document.addEventListener('DOMContentLoaded', function () {


    id = localStorage.getItem('id');

    fetch('/api/lista_metodo/' + id,
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
                // Si la respuesta no es 200 OK, lanza un error
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            //console.log(data);
            if (data.length === 0) {
                // Si la data está vacía, muestra la alerta
                document.getElementById('emptyDataAlert').classList.remove('d-none'); // Muestra la alerta
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

    fetch('/api/obtener_usuario/' + id,
        {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }

        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {


            if (data.status === 200) {



                //document.getElementById('usu_nom').textContent = data.usuario.usuNombre + ' ' + data.usuario.usuApellido;
                //document.getElementById('usu_cod').textContent = data.usuario.usuCodigo;

                var usu_log = 'Bienvenido usuario ' + data.usuario.usuNombre + ' ' + data.usuario.usuApellido + ', codigo de cuenta ' + data.usuario.usuCodigo;
                document.getElementById('usu_log').textContent = usu_log;
                //document.getElementById('level').textContent = data.usuario.rolDescripcion;
                document.getElementById('ficha').textContent = data.usuario.usuSaldo;
                //console.log(data.usuario.usuSaldo);
                //document.getElementById('nom_lev').textContent = data.usuario.rolNombre;
                //document.getElementById('login').textContent = data.usuario.usuLogin;
                //document.getElementById('punto').textContent = data.usuario.usuPunto;

                // Validar el rol y cambiar el icono o mostrar la imagen correspondiente
                const iconElement = document.querySelector('.dashboard-box.box-2 i');
                const imgElement = document.createElement('img');

                if (data.usuario.idRol == 3) {
                    imgElement.src = '/img/nivel/Amateur.png';
                    imgElement.alt = 'Amateur';
                    imgElement.classList.add('rol-image'); // Añadir una clase a la imagen

                    // Aplicar estilos a la imagen
                    imgElement.style.width = '140px'; // Ancho fijo para la imagen
                    imgElement.style.height = 'auto'; // Ajustar la altura automáticamente según el ancho
                    imgElement.style.marginRight = '5px'; // Margen a la derecha para separar la imagen del texto


                    // Reemplazar el icono de usuario con la imagen
                    userIcon.replaceWith(imgElement);
                } else if (data.usuario.idRol == 4) {
                    imgElement.src = '/img/nivel/Aficionado.png';
                    imgElement.alt = 'Aficionado';
                    imgElement.classList.add('rol-image'); // Añadir una clase a la imagen

                    // Aplicar estilos a la imagen
                    imgElement.style.width = '140px'; // Ancho fijo para la imagen
                    imgElement.style.height = 'auto'; // Ajustar la altura automáticamente según el ancho
                    imgElement.style.marginRight = '5px'; // Margen a la derecha para separar la imagen del texto


                    // Reemplazar el icono de usuario con la imagen
                    userIcon.replaceWith(imgElement);
                } else if (data.usuario.idRol == 5) {
                    imgElement.src = '/img/nivel/Competidor.png';
                    imgElement.alt = 'Competidor';
                    imgElement.classList.add('rol-image'); // Añadir una clase a la imagen

                    // Aplicar estilos a la imagen
                    imgElement.style.width = '140px'; // Ancho fijo para la imagen
                    imgElement.style.height = 'auto'; // Ajustar la altura automáticamente según el ancho
                    imgElement.style.marginRight = '5px'; // Margen a la derecha para separar la imagen del texto
                    // Reemplazar el icono de usuario con la imagen
                    userIcon.replaceWith(imgElement);

                } else if (data.usuario.idRol == 6) {
                    imgElement.src = '/img/nivel/Avanzado.png';
                    imgElement.alt = 'Avanzado';
                    imgElement.classList.add('rol-image'); // Añadir una clase a la imagen

                    // Aplicar estilos a la imagen
                    imgElement.style.width = '140px'; // Ancho fijo para la imagen
                    imgElement.style.height = 'auto'; // Ajustar la altura automáticamente según el ancho
                    imgElement.style.marginRight = '5px'; // Margen a la derecha para separar la imagen del texto

                    iconElement.replaceWith(imgElement);
                } else if (data.usuario.idRol == 7) {
                    imgElement.src = '/img/nivel/Destacado.png';
                    imgElement.alt = 'Destacado';
                    imgElement.classList.add('rol-image'); // Añadir una clase a la imagen

                    // Aplicar estilos a la imagen
                    imgElement.style.width = '140px'; // Ancho fijo para la imagen
                    imgElement.style.height = 'auto'; // Ajustar la altura automáticamente según el ancho
                    imgElement.style.marginRight = '5px'; // Margen a la derecha para separar la imagen del texto


                    // Reemplazar el icono de usuario con la imagen
                    userIcon.replaceWith(imgElement);
                } else if (data.usuario.idRol == 8) {
                    imgElement.src = '/img/nivel/Profesional.png';
                    imgElement.alt = 'Profesional';
                    imgElement.classList.add('rol-image'); // Añadir una clase a la imagen

                    // Aplicar estilos a la imagen
                    imgElement.style.width = '140px'; // Ancho fijo para la imagen
                    imgElement.style.height = 'auto'; // Ajustar la altura automáticamente según el ancho
                    imgElement.style.marginRight = '5px'; // Margen a la derecha para separar la imagen del texto


                    // Reemplazar el icono de usuario con la imagen
                    userIcon.replaceWith(imgElement);
                } else if (data.usuario.idRol == 9) {
                    imgElement.src = '/img/nivel/Campeon.png';
                    imgElement.alt = 'Campeon';
                    imgElement.classList.add('rol-image'); // Añadir una clase a la imagen

                    // Aplicar estilos a la imagen
                    imgElement.style.width = '140px'; // Ancho fijo para la imagen
                    imgElement.style.height = 'auto'; // Ajustar la altura automáticamente según el ancho
                    imgElement.style.marginRight = '5px'; // Margen a la derecha para separar la imagen del texto


                    // Reemplazar el icono de usuario con la imagen
                    userIcon.replaceWith(imgElement);
                }


            } else {
                console.error(data.message);

            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

    fetch('/api/usu_inv_act/' + id,
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
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {

            //console.log(data);
            if (data.status === 200) {

                // Calcular la fecha final sin contar los sábados y domingos
                const fechaInicial = new Date(data.usuario.inv_fecha_inicio);
                let diasLaborables = 0;
                const fechaActual = new Date(); // Obtener la fecha actual
                let fec_ini = data.usuario.inv_fecha_inicio;

                //var fec_act = fechaActual.toISOString().slice(0, 10);

                var year = fechaActual.getFullYear();
                var month = (fechaActual.getMonth() + 1).toString().padStart(2,
                    '0'); // Sumamos 1 porque los meses van de 0 a 11
                var day = fechaActual.getDate().toString().padStart(2, '0');

                var fec_act = `${year}-${month}-${day}`;

                var acumulado = 0;
                var resumen = '';

                // Bucle para agregar los días laborables
                while (fec_ini < fec_act) {
                    // Verifica si el día es laborable (lunes a viernes)
                    if (fechaInicial.getDay() !== 0 && fechaInicial.getDay() !== 6) {
                        diasLaborables++;

                    }
                    // Incrementa la fecha en un día
                    fechaInicial.setDate(fechaInicial.getDate() + 1);

                    //fec_ini = `${year_ini}-${month_ini}-${day_ini}`;
                    fec_ini = fechaInicial.toISOString().slice(0, 10);

                    //console.log(fec_ini);
                }

                //console.log("Días laborables pasados:", diasLaborables);

                acumulado = diasLaborables * data.usuario.invValorDiario;

                total_adelanto = acumulado - data.usuario.total_pago;

                resumen = `${diasLaborables} Dia(s)<br> Total $${acumulado}<br>Retiros $${data.usuario.total_pago}<br><span class="badge bg-primary">Saldo $${total_adelanto}</span>`;

                document.getElementById('nom_plan').textContent = data.usuario.invNombre;
                document.getElementById('val_plan').textContent = data.usuario.invValor;
                document.getElementById('total_pago_mensual').textContent = data.usuario.total_pago_mensual;

                const imagenUsuario = document.getElementById('frame');
                imagenUsuario.src = `data:image/jpeg;base64, ${data.usuario.imagen}`;
                document.getElementById('dias').textContent = diasLaborables + ' Dia(s)';
                //document.getElementById('acumulado').textContent = 'Acumulado $ ' + acumulado;
                //document.getElementById('Retiros').textContent = 'Retiro(s) $ ' + data.usuario.total_pago;
                //document.getElementById('saldo').textContent = 'Saldo $ ' + total_adelanto;

                var dia_tra = data.usuario.inv_dias - diasLaborables;

                document.getElementById('dia_res').textContent = dia_tra + ' Dia(s)';

                // console.log(resumen);
            } else {

                document.getElementById('plan_activo').style.display = 'none';
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });


    fetch('/api/tot_com_tipo/' + id,
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
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {

            //console.log(data);
            if (data.status === 200) {

                document.getElementById('total_com_inv').textContent = data.data.suma_com_inv;
                document.getElementById('total_com_cur').textContent = data.data.suma_com_cur;
                document.getElementById('total_com_bot').textContent = data.data.suma_com_bot;

            } else {

                console.error('Error fetching data: ', error);
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });


    fetch('/api/bal_gen/' + id,
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
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {

            //console.log(data);
            if (data.status === 200) {

                const balanceTotal = data.data.total_inversiones_finalizadas + data.data.total_inversiones_en_proceso;


                document.getElementById('balance_general').textContent = balanceTotal;


            } else {

                console.error('Error fetching data: ', error);
            }
        })
        .catch(error => {
            console.error('Error fetching data: ', error);
        });

});
