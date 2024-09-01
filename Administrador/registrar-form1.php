<?php include("./headerAD.php") ?>
<div style="text-align: center;" class="main-content">Datos del usuario</div>
<br>
<div class="form1">
    <div class="cont-form1">
        <?php
    
        // Verificar si se ha pasado el parámetro 'imagen' en la URL
        if (isset($_GET['imagen'])) {
            $imagen = $_GET['imagen'];
            // Mostrar la imagen en el div
            echo '<img class="img-st2" src="../images/' . $imagen . '" alt="Imagen">';
            // Mostrar la imagen overlay encima de la imagen original
            echo '<a href="tu_link">';
            echo '<img class="image-overlay" src="../images/IconoAgregar.png" alt="Icono agregar">';
            echo '</a>';
        } else {
            // Si no se pasa el parámetro, mostrar un mensaje de error o una imagen predeterminada
            echo 'Imagen no encontrada';
        }
        ?>
    </div>
    <div class="cont-form2">
        <form action="">
            <p>
                <label for="">Nombre</label>
                <input type="text" placeholder="Ingresa tu Nombre">
            </p>
            <p>
                <label for="">Apellido paterno</label>
                <input type="text" placeholder="Ingresa el primer Apellido">
            </p>
            <p>
                <label for="">Apellido materno</label>
                <input type="text" placeholder="Ingresa el segundo Apellido">
            </p>
            <p>
                <label for="">Usuario</label>
                <input type="text" placeholder="Ingresa el nombre de Usuario">
            </p>
            <p>
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" placeholder="Ingresa tu Contraseña">
            </p>
        </form>
    </div>
</div>
<?php include("./footerAD.phpp") ?>