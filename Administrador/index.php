<?php
include("config.php");
include("firebaseRDB.php");


$db = new firebaseRDB($databaseURL);
?>


<style>
   * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;

      font-family: Arial, monospace, sans-serif;
      font-size: 20px;
      font-weight: 700px;
      -webkit-animation-name: animarsuperior;
      -webkit-animation-duration: 0.5s;
      animation-name: animarsuperior;
      animation-duration: 0.5s;
   }

   @-webkit-keyframes animarsuperior {
      from {
         top: -300px;
         opacity: 0;
      }

      top {
         top: 0;
         opacity: 1;
      }
   }

   @keyframes animarsuperior {
      from {
         top: -300px;
         opacity: 0;
      }

      top {
         top: 0;
         opacity: 1;
      }
   }

   .recomendar {
      margin: 0 auto;
      padding: 50px 100px 50px 100px;
      color: #b31412;
      border-radius: 20px;
      border-color: transparent;
      text-align: justify;

   }

   .recomendar svg {
      vertical-align: sub;
   }

   tr>td {
      width: 50px;
   }

   td>p {
      overflow: hidden;
      white-space: nowrap;
      width: 100px;
      text-overflow: ellipsis;

   }

   .ajustar {
      width: 10px;

   }

   img {
      width: 200px;
   }
</style>

<div class="recomendar">
   <p>
      <svg width="40px" height="40px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#fa1e4e">
         <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56 1h.88l6.54 12.26-.44.74H1.44L1 13.26 7.56 1zM8 2.28L2.28 13H13.7L8 2.28zM8.625 12v-1h-1.25v1h1.25zm-1.25-2V6h1.25v4h-1.25z" />
      </svg> Hola bienvenido es importante que lea con atención las siguientes recomendaciones: <br>
      1- En la siguiente tabla se muestran las imagenes que conforman el carrusel con las noticias y eventos importantes para la comunidad academica. <br>
      2- Debe tener en cuenta que puede ver, agregar, editar y eliminar imagenes. <br>
      3- Cada boton determina la función a realizar. <br>
      4- Es necesario que las imagenes a subir tengan la misma dimensión para todas. <br>
      5- En cada columna se muestra el orden de las imagenes en la que corresponden imagen del evento y el enlace para redireccionar a la información completa de dicho evento.
   </p>

</div>


<br><br>

<a href="add.php"><button style="background: #42b72a; color: #fff; padding: 4px; border-radius: 8px; cursor: pointer; border: #42b72a;">AGREGAR IMÁGENES</button></a><br><br>

<table border="1">
   <tr align="center" style="background:#811246; color:#fff;" class="">
      <td>Imagen</td>
      <td>Enlace</td>
      <td>Imagen 2</td>
      <td>Enlace 2</td>
      <td>Imagen 3</td>
      <td>Enlace 3</td>
      <td>Imagen 4</td>
      <td>Enlace 4</td>
      <td colspan="2">Acciones</td>
   </tr>
   <?php
   $data = $db->retrieve("film");
   $data = json_decode($data, 1);

   if (is_array($data)) {
      foreach ($data as $id => $film) {
         echo "<tr>
            <td > <img src='{$film['imagen']}'> </td>
            <td > <p>{$film['enlace']}</p> </td>
            <td > <img src='{$film['imagen2']}'> </td>
            <td > <p>{$film['enlace2']}</p> </td>
            <td > <img src='{$film['imagen3']}'> </td>
            <td > <p>{$film['enlace3']}</p> </td>
            <td > <img src='{$film['imagen4']}'> </td>
            <td > <p>{$film['enlace4']}</p> </td>
            <td > <a style='border-radius: 8px; background:#1877f2; text-decoration: none; color: #fff; cursor: pointer; padding:8px;' href='edit.php?id=$id'>Editar</a> </td>
            <td > <a style='border-radius: 8px; background:#fa3e3e; text-decoration: none; color: #fff; cursor: pointer; padding:8px;' href='delete.php?id=$id'>Eliminar</a> </td>
         </tr>";
      }
   }
   ?>
</table>