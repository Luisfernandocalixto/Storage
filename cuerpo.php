
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
      <td>Acciones</td>
      <!-- <td colspan="2">Acciones</td> En caso de ser dos opciones-->
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
            <td > <a style='border-radius: 8px; background:#1877f2; text-decoration: none; color: #fff; cursor: pointer; padding:8px 14px 8px 14px;' href='edit.php?id=$id'>Editar</a> </td>
         </tr>";
      }
   }
   ?>