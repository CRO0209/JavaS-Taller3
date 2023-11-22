


function enviarRegistro(event) {
    event.preventDefault(); // Evita que el formulario se envíe de forma predeterminada

    // Obtén los valores de los campos del formulario
    var descripcion = document.getElementById("descripcion").value;
    var marca = document.getElementById("marca").value;
    var modelo = document.getElementById("modelo").value;
    var tipo = document.getElementById("tipo").value;
    var año = document.getElementById("año").value;

    // Crea un objeto con los datos a enviar al servidor
    var datos = {
        descripcion: descripcion,
        marca: marca,
        modelo: modelo,
        tipo: tipo,
        año: año
    };

    // Envía los datos al servidor utilizando AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/producto_agregar.php", true); // Reemplaza "guardar_actividad.php" con la ruta correcta al archivo PHP
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // La solicitud se completó correctamente
            var respuesta = xhr.responseText;
            // Actualiza la interfaz de usuario según la respuesta del servidor
            // Por ejemplo, muestra un mensaje de éxito o error
            alert(respuesta);
        }
    };
    xhr.send("&descripcion=" + descripcion + "&marca=" + marca + "&modelo=" + modelo + "&tipo=" + tipo + "&año=" + año );

    location.replace("index.php");

}

function modificarRegistro(event) {
    event.preventDefault();

    var id = document.getElementById("id-act").value;
    var descripcion = document.getElementById("descripcion").value;
    var marca = document.getElementById("marca").value;
    var modelo = document.getElementById("modelo").value;
    var tipo = document.getElementById("tipo").value;
    var año = document.getElementById("año").value;


    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/producto_actualizar.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // La solicitud se completó correctamente
            var respuesta = xhr.responseText;
            // Actualiza la interfaz de usuario según la respuesta del servidor
            // Por ejemplo, muestra un mensaje de éxito o error
            alert(respuesta);
            location.replace("index.php");
        }
    };
    xhr.send("id=" + id + "&descripcion=" + descripcion + "&marca=" + marca + "&modelo=" + modelo + "&tipo=" + tipo + "&año=" + año );


}