<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$insert = $db->insert("film", [
   "enlace"     => $_POST['enlace'],
   "imagen" => $_POST['imagen'],
   "imagen2"      => $_POST['imagen2'],
   "enlace2"    => $_POST['enlace2'],
   "imagen3"      => $_POST['imagen3'],
   "enlace3"      => $_POST['enlace3'],
   "imagen4"      => $_POST['imagen4'],
   "enlace4"      => $_POST['enlace4']
]);

echo "Imágenes guardadas";

?>

<style>
   * {
      padding: 0;
      box-sizing: border-box;
   }
   
   .contenido {
      box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.14);
      -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.14);
      -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.14);
      -webkit-animation-name: animarsuperior;
      -webkit-animation-duration: 0.5s;
      animation-name: animarsuperior;
      animation-duration: 0.5s;
      border-radius: 20px;
      font-size: 25px;
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

   .Encabezado {
      background: #fec2d0;
      padding: 0px 50px 0px 50px;
      color: #b31412;
      border-radius: 20px;
      border-color: transparent;

   }
</style>

<div class="contenido">


   <div class="Encabezado" style="display: flex; justify-content: space-between;">


      <div style="padding: 10px 0px 10px 0px;"><img height="50px" src="https://michoacan.gob.mx/cdn/img/logos/dependencias/telebachillerato.svg" alt=""></div>
      <div style="padding: 10px 0px 10px 0px;"><img height="50px" src="https://michoacan.gob.mx/images/logo-gris.png?1222259157" alt=""></div>



   </div>

   <br><br>
   <div style="display: flex; justify-content: center;"><img height="" width="" src="https://cdn-icons-png.flaticon.com/128/5610/5610944.png" alt=""></div>
   <h1 style="display: flex; justify-content: center; padding: 5px ;">Imágenes agregadas</h1>
   <br><br>


</div>