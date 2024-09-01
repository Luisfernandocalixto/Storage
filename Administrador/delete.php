<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if ($id != "") {
   $delete = $db->delete("film", $id);
   echo "Imágenes eliminadas";
}

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
   <div style="display: flex; justify-content: center;"><img height="" width="" src="https://cdn-icons-png.flaticon.com/128/7718/7718788.png" alt=""></div>
   <h1 style="display: flex; justify-content: center; padding: 5px ;">Imágenes eliminadas</h1>
   <br><br>


</div>