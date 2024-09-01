<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("film/$id");
$data = json_decode($retrieve, 1);

?>
<style>
   * {
      font-size: 25px;
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

   .cuadroTexto {
      background: #fec2d0;
      padding: 0px 50px 0px 50px;
      color: #b31412;
      border-radius: 20px;
      font-size: 10px;
      border-color: transparent;
      text-align: justify;

   }

   .cuadroTexto svg {
      vertical-align: sub;
   }


   form {
      display: flex;
      justify-content: center;
      padding: 20px;
      align-items: center;
   }

   label {
      color: #811246;
   }

   input {
      color: gray;
      border-radius: 8px;
      background-color: #fec2d0;
      border: none;
      text-align: center;
   }

   table>tr {
      justify-items: center;
      align-items: center;
   }

   tr td {
      padding: 10px;

   }

   .guardar {
      background: #42b72a;
      color: #fff;
      padding: 4px;
      border-radius: 8px;
      cursor: pointer;
      border: #42b72a;


   }

   .guardar:active {
      background: #811246;
   }
</style>
<script>

   

   

</script>

<div class="contenido">

   <div class="cuadroTexto" style="display: flex; justify-content: center;">
      <p style="font-size: 15px;">
         <svg width="40px" height="40px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#fa1e4e">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56 1h.88l6.54 12.26-.44.74H1.44L1 13.26 7.56 1zM8 2.28L2.28 13H13.7L8 2.28zM8.625 12v-1h-1.25v1h1.25zm-1.25-2V6h1.25v4h-1.25z" />
         </svg> Es importante que lea con atención las siguientes recomendaciones: <br>
         1- Ningun campo del formulario debe quedar vacio . <br>
         2- Debe ingresar la URL correspondiente en imagen del evento. <br>
         3- Debe ingresar la URL correspondiente en enlace del evento. <br>

      </p>
   </div>
   <h3 style="display: flex; justify-content: center; padding: 5px ;">Ingrese los datos correspondientes del formulario</h3>
   <form method="post" action="action_edit.php">
      <table border="0" width="500">
         <tr>
            <td><label for="">Imagen</label></td>
            <td>:</td>
            <td><input type="url" name="imagen" value="<?php echo $data['imagen'] ?>" placeholder="Ingrese url de imagen" required></td>
         </tr>
         <tr>
            <td><label for="">Enlace</label></td>
            <td>:</td>
            <td><input type="url" name="enlace" value="<?php echo $data['enlace'] ?>" placeholder="Ingrese url de evento" required></td>
         </tr>
         <tr>
            <td><label for="">Imagen 2 </label></td>
            <td>:</td>
            <td><input type="url" name="imagen2" value="<?php echo $data['imagen2'] ?>" placeholder="Ingrese url de imagen" required></td>
         </tr>
         <tr>
            <td><label for="">Enlace 2</label></td>
            <td>:</td>
            <td><input type="url" name="enlace2" value="<?php echo $data['enlace2'] ?>" placeholder="Ingrese url de evento" required></td>
         </tr>
         <tr>
            <td><label for="">Imagen 3</label></td>
            <td>:</td>
            <td><input type="url" name="imagen3" value="<?php echo $data['imagen3'] ?>" placeholder="Ingrese url de imagen" required></td>
         </tr>
         <tr>
            <td><label for="">Enlace 3</label></td>
            <td>:</td>
            <td><input type="url" name="enlace3" value="<?php echo $data['enlace3'] ?>" placeholder="Ingrese url de evento" required></td>
         </tr>
         <tr>
            <td><label for="">Imagen 4</label></td>
            <td>:</td>
            <td><input type="url" name="imagen4" value="<?php echo $data['imagen4'] ?>" placeholder="Ingrese url de imagen" required></td>
         </tr>
         <tr>
            <td><label for="">Enlace 4</label></td>
            <td>:</td>
            <td><input type="url" name="enlace4" value="<?php echo $data['enlace4'] ?>" placeholder="Ingrese url de imagen" required></td>
         </tr>
         <tr>
            <td>
               <input type="hidden" name="id" value="<?php echo $id ?>">
               <input type="submit" value="GUARDAR" class="guardar" id="mostrar">
            </td>
         </tr>
      </table>
   </form>

</div>