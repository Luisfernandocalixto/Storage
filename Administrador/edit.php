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

   /*  */
   #ventanaSubida {
      box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.14);
      -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.14);
      -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.14);
      border: 1px solid #d2d2d2;
      border-radius: 20px;
      -webkit-animation-name: animarsuperior;
      -webkit-animation-duration: 0.5s;
      animation-name: animarsuperior;
      animation-duration: 0.5s;

   }

   @keyframes salir {
      to {
         opacity: 0;
      }
   }

   @-webkit-keyframes salir {
      to {
         opacity: 0;
      }
   }


   .inputArchivo {
      display: none;


   }


   .labelArchivo {
      height: 100px;
      width: 150px;
      border-radius: 6px;
      border: 1px dashed #999;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #811246;
      margin-bottom: 10px;
      font-size: 50px;
      font-weight: 700;
   }

   .labelArchivo:hover {
      color: #de0611;
      border: 1px dashed #de0611;

      background-color: #1645612a;

   }

   .fileText {
      color: #000;
      padding-bottom: 10px;
   }

   .butt {
      border-radius: 8px;
      padding: 10px;
      background: #1877f2;

      color: white;
      border: none;
      margin-bottom: 10px;
      cursor: pointer;
      font-size: 18px;
      font-weight: 700;
   }

   .butt:hover {
      background-color: #811246;
   }

   .bar {
      border: 1px solid #ddd;
      border-radius: 10px;
      height: 30px;
      width: 170px;
      background: #d2d2d2;
   }

   .progress {
      background: -webkit-linear-gradient(12deg, red, blue);
      height: 100%;
      width: 0%;

   }

   .uploadPercentage {
      font-size: 20px;
   }

   /*  */
   .label-direccion {
      display: flex;
      justify-content: center;
      padding: 10px;
      font-size: 20px;
      color: #000;


   }

   .texto-copiado {
      position: relative;
      padding: 10px;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      display: flex;
   }

   .texto-copiado textarea.texto-direccion {
      padding: 5px;
      color: #555;
      border: none;
      outline: none;

   }

   .texto-copiado .boton-copiado {
      padding: 5px;
      background-color: #5784f5;
      color: #fff;
      border: none;
      outline: none;
      border-radius: 5px;
      cursor: pointer;

   }

   .texto-copiado .boton-copiado:active {
      background: #809ce2;

   }

   .texto-copiado .boton-copiado::before {
      content: "Copiado";
      position: absolute;
      top: -45px;
      right: 0;
      background: #5c81dc;
      padding: 8px 10px;
      border-radius: 5px;
      font-size: 15px;
      display: none;

   }

   .texto-copiado .boton-copiado::after {
      content: "";
      position: absolute;
      top: -20px;
      right: 25px;
      width: 10px;
      height: 10px;
      background: #5c81dc;
      transform: rotate(45deg);
      display: none;
   }

   .texto-copiado.active .boton-copiado::before,
   .texto-copiado.active .boton-copiado::after {
      display: block;
   }

   /*  */

   /*  */
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


   .formularioEditar {
      display: flex;
      justify-content: center;
      padding: 20px;
      align-items: center;
      outline: 1px solid #d2d2d2;
      border-radius: 20px;
   }

   .labelEditar {
      color: #811246;
   }

   .inputEditar {
      color: gray;
      border-radius: 8px;
      background-color: #fec2d0;
      border: none;
      text-align: center;
   }

   .tableEditar>.trEditar {
      justify-items: center;
      align-items: center;
   }

   .trEditar .tdEditar {
      padding: 10px;

   }

   .editar {
      background-color: #b31412;
      color: #fff;
      padding: 4px;
      border-radius: 8px;
      cursor: pointer;
      border: #42b72a;
      text-decoration: none;
   }

   .editar:hover {
      background: #811246;

   }

   .guardar {
      background: #42b72a;
      color: #fff;
      padding: 4px;
      border-radius: 8px;
      cursor: pointer;
      border: #42b72a;


   }

   .guardar:hover {
      background: #811246;
   }
</style>


<div class="contenido">

   <div class="cuadroTexto" style="display: flex; justify-content: center;">
      <p style="font-size: 15px;">
         <svg width="40px" height="40px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#fa1e4e">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56 1h.88l6.54 12.26-.44.74H1.44L1 13.26 7.56 1zM8 2.28L2.28 13H13.7L8 2.28zM8.625 12v-1h-1.25v1h1.25zm-1.25-2V6h1.25v4h-1.25z" />
         </svg> Es importante que lea con atención las siguientes recomendaciones: <br>
         1- Ningun campo del formulario debe quedar vacio . <br>
         2- Debe ingresar la URL correspondiente en imagen del evento. <br>
         3- En caso de no contar con URL de la imagen utilice el conversor. <br>
         - Presione subir imagen y escoja la imagen dentro de su explorador de archivos.<br>
         - Recargue la página en caso de ser necesario. <br>
         4- Debe ingresar la URL correspondiente en enlace del evento. <br>

      </p>
   </div>
   <!--  -->
   <div id="ventanaSubida" style="display: none; justify-content: center; justify-items: center; padding: 10px 0px 10px 0px;">

      <input type="file" class="inputArchivo" id="fileInp" onchange="getFile(event)" accept="image/png, image/jpeg, image/jpg" required>

      <label for="fileInp" class="labelArchivo">+</label>

      <span class="fileText"></span>

      <button class="butt" onclick="cargandoImg()">Cargando Imagen</button>

      <div class="bar">
         <div class="progress"></div>
      </div>

      <div class="uploadPercentage" style="color: #000;">0%</div>


      <!-- Fin  -->
      <hr style="width: 300px; background: #000;">


      <div class="contenedor-direccion" style="-webkit-animation-name: animarsuperior;
      -webkit-animation-duration: 0.5s;
      animation-name: animarsuperior;
      animation-duration: 0.5s;">

         <label for="direccion" class="label-direccion">
            <b>
               URL imagen
            </b>
         </label>

         <div class="texto-copiado">

            <textarea name="direccion" id="url" cols="30" rows="1" class="texto-direccion" readonly style="width: 150px; resize: none; overflow: hidden; font-size: 20px;"></textarea>
            <button class="boton-copiado">
               <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="18" height="18" fill="#fff" viewBox="0 0 448 448" id="svg2" version="1.1" inkscape:version="0.91 r13725" sodipodi:docname="clone.svg">
                  <title id="title3347">clone</title>
                  <defs id="defs4" />
                  <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="0.7" inkscape:cx="83.19264" inkscape:cy="244.19737" inkscape:document-units="px" inkscape:current-layer="layer1" showgrid="true" fit-margin-top="448" fit-margin-right="384" fit-margin-left="0" fit-margin-bottom="0" units="px" inkscape:window-width="1196" inkscape:window-height="852" inkscape:window-x="590" inkscape:window-y="442" inkscape:window-maximized="0" inkscape:snap-bbox="true" inkscape:bbox-nodes="true">
                     <inkscape:grid type="xygrid" id="grid3347" spacingx="16" spacingy="16" empspacing="2" originx="0" originy="-1.7498462e-005" />
                  </sodipodi:namedview>
                  <metadata id="metadata7">
                     <rdf:RDF>
                        <cc:Work rdf:about="">
                           <dc:format>image/svg+xml</dc:format>
                           <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                           <dc:title>clone</dc:title>
                        </cc:Work>
                     </rdf:RDF>
                  </metadata>
                  <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(0,-604.36224)">
                     <path style="fill-opacity:1;stroke:none" d="M 0 0 L 0 320 L 96 320 L 96 288 L 32 288 L 32 32 L 288 32 L 288 96 L 320 96 L 320 0 L 0 0 z " transform="translate(0,604.36224)" id="rect3334" />
                     <path style="fill-opacity:1;stroke:none" d="M 128 128 L 128 448 L 448 448 L 448 128 L 128 128 z M 160 160 L 416 160 L 416 416 L 160 416 L 160 160 z " transform="translate(0,604.36224)" id="rect3336" />
                  </g>
               </svg>
            </button>

         </div>

      </div>

      <br>

      <div>
         <h3 style="color: #000;">Vista previa</h3>
         <img id="img" src="" alt="" style="width: 100px; animation: salir 1.5s linear infinite alternate; -webkit-animation: salir 1.5s linear infinite alternate;">
      </div>

      <br>

      <button class="butt" id="cerrarSubida">Regresar</button>

   </div>

   <br>

   <div style="display: flex; justify-content: center;">
      <button class="butt" id="abrirSubida">Subir imagen</button>
   </div>



   <!--  -->
   <h3 style="display: flex; justify-content: center; padding: 5px ;" id="tituloFormulario">Ingrese los datos correspondientes del formulario</h3>
   <form method="post" action="action_edit.php" class="formularioEditar" id="formularioEditar">
      <table border="0" width="500" class="tableEditar">
         <tr class="trEditar">
            <td class="tdEditar"><label class="labelEditar" for="imagen">Imagen</label></td>
            <td class="tdEditar">:</td>
            <td class="tdEditar"><input type="url" class="inputEditar" id="imagen" name="imagen" value="<?php echo $data['imagen'] ?>" placeholder="Ingrese url de imagen" required></td>
         </tr>
         <tr class="trEditar">
            <td class="tdEditar"><label class="labelEditar" for="enlace">Enlace</label></td>
            <td class="tdEditar">:</td>
            <td class="tdEditar"><input type="url" class="inputEditar" id="enlace" name="enlace" value="<?php echo $data['enlace'] ?>" placeholder="Ingrese url de evento" required></td>
         </tr>
         <tr class="trEditar">
            <td class="tdEditar"><label class="labelEditar" for="imagen2">Imagen 2 </label></td>
            <td class="tdEditar">:</td>
            <td class="tdEditar"><input type="url" class="inputEditar" id="imagen2" name="imagen2" value="<?php echo $data['imagen2'] ?>" placeholder="Ingrese url de imagen" required></td>
         </tr>
         <tr class="trEditar">
            <td class="tdEditar"><label class="labelEditar" for="enlace2">Enlace 2</label></td>
            <td class="tdEditar">:</td>
            <td class="tdEditar"><input type="url" class="inputEditar" id="enlace2" name="enlace2" value="<?php echo $data['enlace2'] ?>" placeholder="Ingrese url de evento" required></td>
         </tr>
         <tr class="trEditar">
            <td class="tdEditar"><label class="labelEditar" for="imagen3">Imagen 3</label></td>
            <td class="tdEditar">:</td>
            <td class="tdEditar"><input type="url" class="inputEditar" id="imagen3" name="imagen3" value="<?php echo $data['imagen3'] ?>" placeholder="Ingrese url de imagen" required></td>
         </tr>
         <tr class="trEditar">
            <td class="tdEditar"><label class="labelEditar" for="enlace3">Enlace 3</label></td>
            <td class="tdEditar">:</td>
            <td class="tdEditar"><input type="url" class="inputEditar" id="enlace3" name="enlace3" value="<?php echo $data['enlace3'] ?>" placeholder="Ingrese url de evento" required></td>
         </tr>
         <tr class="trEditar">
            <td class="tdEditar"><label class="labelEditar" for="imagen4">Imagen 4</label></td>
            <td class="tdEditar">:</td>
            <td class="tdEditar"><input type="url" class="inputEditar" id="imagen4" name="imagen4" value="<?php echo $data['imagen4'] ?>" placeholder="Ingrese url de imagen" required></td>
         </tr>
         <tr class="trEditar">
            <td class="tdEditar"><label class="labelEditar" for="enlace4">Enlace 4</label></td>
            <td class="tdEditar">:</td>
            <td class="tdEditar"><input type="url" class="inputEditar" id="enlace4" name="enlace4" value="<?php echo $data['enlace4'] ?>" placeholder="Ingrese url de imagen" required></td>
         </tr>
         <tr class="trEditar">
            <td class="tdEditar" colspan="3">
               <input type="hidden" name="id" value="<?php echo $id ?>">

               <a class="editar" style="margin-right: 100px;" href="index.php">CANCELAR</a>
               <input type="submit" value="GUARDAR" class="guardar" id="mostrar" style="margin-left: 50px;">

            </td>
         </tr>
      </table>
   </form>

</div>

<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script src="../Administrador/js/cargar.js"></script>
<script>
   let textoCopiado = document.querySelector(".texto-copiado");
   let botonCopiar = textoCopiado.querySelector(".boton-copiado");

   botonCopiar.addEventListener("click", function() {
      let inputCopiar = textoCopiado.querySelector(".texto-direccion");

      inputCopiar.select();
      document.execCommand("copy");
      textoCopiado.classList.add("active");
      window.getSelection().removeAllRanges();
      setTimeout(function() {
         textoCopiado.classList.remove("active");
      }, 2500);
   });

   // 

   let ventana = document.getElementById("ventanaSubida");
   let botonAbrir = document.getElementById("abrirSubida");
   let botonCerrar = document.getElementById("cerrarSubida");
   let tituloFormulario = document.getElementById("tituloFormulario");
   let formularioEditar = document.getElementById("formularioEditar");
   let mostrarURL = document.getElementById("mostrarURL");
   let contenedorDireccion = document.getElementById("contenedor-direccion");


   botonAbrir.addEventListener("click", () => {
      ventana.style.display = "grid";
      botonAbrir.style.display = "none";
      tituloFormulario.style.display = "none";
      formularioEditar.style.display = "none";
   });


   botonCerrar.addEventListener("click", () => {
      ventana.style.display = "none";
      botonAbrir.style.display = "flex";
      tituloFormulario.style.display = "flex";
      formularioEditar.style.display = "flex";
   });
</script>