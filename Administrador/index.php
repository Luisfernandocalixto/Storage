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
      font-size: 25px;
      font-weight: 700px;
   }

   .contenidoTotal {
      padding: 10px;
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
      background: #fec2d0;
      padding: 0px 50px 0px 50px;
      color: #b31412;
      border-radius: 20px;
      border-color: transparent;
      text-align: justify;
      padding: 20px;

   }

   .recomendar svg {
      vertical-align: sub;
   }

   p {
      overflow: hidden;
      white-space: nowrap;
      width: 300px;
      text-overflow: ellipsis;

   }

   img {
      width: 300px;
      height: 150px;
      border-radius: 8px;

   }

   .galeria {
      min-height: 100vh;
      width: 80%;
      outline: 1px solid #d2d2d2;
      margin: 0 auto;

      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(min(350px, 100%), 1fr));
      gap: 30px;

      box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.14);
      -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.14);
      -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.14);
      border-radius: 20px;
   }

   .galeria_img {
      display: grid;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 100%;
      object-fit: cover;

      border-radius: 20px;
      outline: 1px solid #d2d2d2;
      position: relative;

      overflow: hidden;

   }

   #img1:hover::after {
      transform: translateY(0);
   }

   #img1::after {
      content: "Imagen 1 y enlace";
      font-size: 1.5rem;
      color: #fff;
      background-color: #16456198;
      position: absolute;
      inset: 0;
      display: flex;
      justify-content: center;
      place-items: center;
      transform: translateY(100%);
      transition: .3s;
      border-radius: 20px;


   }

   #img2:hover::after {
      transform: translateY(0);
   }

   #img2::after {
      content: "Imagen 2 y enlace";
      font-size: 1.5rem;
      color: #fff;
      background-color: #16456198;
      position: absolute;
      inset: 0;
      display: flex;
      justify-content: center;
      place-items: center;
      transform: translateY(100%);
      transition: .3s;
      border-radius: 20px;

   }

   #img3:hover::after {
      transform: translateY(0);
   }

   #img3::after {
      content: "Imagen 3 y enlace";
      font-size: 1.5rem;
      color: #fff;
      background-color: #16456198;
      position: absolute;
      inset: 0;
      display: flex;
      justify-content: center;
      place-items: center;
      transform: translateY(100%);
      transition: .3s;
      border-radius: 20px;

   }

   #img4:hover::after {
      transform: translateY(0);
   }

   #img4::after {
      content: "Imagen 4 y enlace";
      font-size: 1.5rem;
      color: #fff;
      background-color: #16456198;
      position: absolute;
      inset: 0;
      display: flex;
      justify-content: center;
      place-items: center;
      transform: translateY(100%);
      transition: .3s;
      border-radius: 20px;

   }

   .editar {
      border-radius: 8px;
      background-color: #1877f2;
      text-decoration: none;
      color: #fff;
      cursor: pointer;
      padding: 8px 14px 8px 14px;

   }

   .editar:hover {
      background-color: #811246;
   }
</style>


<div class="contenidoTotal">


   <div class="recomendar" style="display: flex; justify-content: center;">
      <span style="font-size: 15px;">
         <svg width=" 40px" height="40px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#fa1e4e">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56 1h.88l6.54 12.26-.44.74H1.44L1 13.26 7.56 1zM8 2.28L2.28 13H13.7L8 2.28zM8.625 12v-1h-1.25v1h1.25zm-1.25-2V6h1.25v4h-1.25z" />
         </svg> Hola bienvenido es importante que lea con atención las siguientes recomendaciones: <br> <br>
         1- En la siguiente tabla se muestran las imagenes que conforman el carrusel con las noticias y eventos importantes para la comunidad academica. <br>
         2- Debe tener en cuenta que puede ver, agregar, editar y eliminar imagenes. <br>
         3- Cada boton determina la función a realizar. <br>
         4- Es necesario que las imagenes a subir tengan la misma dimensión para todas. <br>
         5- En cada columna se muestra el orden de las imagenes en la que corresponden imagen del evento y el enlace para redireccionar a la información completa de dicho evento.
      </span>

   </div>


   <br><br>



   <?php
   $data = $db->retrieve("film");
   $data = json_decode($data, 1);

   if (is_array($data)) {
      foreach ($data as $id => $film) {  ?>
         <section class="galeria">

            <div id="img1" class="galeria_img"> <?php echo "<img src='{$film['imagen']}'" ?>>

               <div class="">

                  <p>

                     <marquee behavior="" direction="">

                        <?php echo "{$film['enlace']}" ?>

                     </marquee>

                  </p>

               </div>

            </div>


            <div id="img2" class="galeria_img"> <?php echo "<img src='{$film['imagen2']}'" ?>>

               <div class="">


                  <p>
                     <marquee behavior="" direction="">

                        <?php echo "{$film['enlace2']}" ?>

                     </marquee>

                  </p>

               </div>

            </div>

            <div id="img3" class="galeria_img"> <?php echo "<img src='{$film['imagen3']}'" ?>>

               <div class="">
                  <p>

                     <marquee behavior="" direction="">

                        <?php echo "{$film['enlace3']}" ?>

                     </marquee>


                  </p>
               </div>

            </div>


            <div id="img4" class="galeria_img"> <?php echo "<img src='{$film['imagen4']}'" ?>>

               <div class="">
                  <p>

                     <marquee behavior="" direction="">

                        <?php echo "{$film['enlace4']}" ?>

                     </marquee>

                  </p>

               </div>

            </div>


         </section>
         <br>
         <div style="display: grid; justify-content: center; padding: 0px 0px 5px 0px;">

            <a class="editar" href="edit.php?id=<?php echo $id ?>">Editar</a>

         </div>


</div>

<?php

      }
   }
?>