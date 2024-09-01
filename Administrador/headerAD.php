<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="https://michoacan.gob.mx/cdn/img/logos/dependencias/telebachillerato.svg"
    title="icono plataforma" type="image/x-icon" alt="icono Plataforma">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Admin.css" type="text/css">
  <!-- <link rel="stylesheet" href="../css/carrucel.css" type="text/css"> -->
  <link rel="stylesheet" href="../css/carrucel.css" type="text/css">
  <link rel="stylesheet" href="../css/estilo.css" type="text/css">
  <meta name="author" content="TeamAlphaDinamita">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../JS/userinfo.js"></script>
  <script src="../JS/sidebar.js"></script>
  <script src="../JS/notifi.js"></script>
  
  <title>Plataforma Telebachillerato</title>
</head>

<body>
    <div class="container">
        <header class="nav">
            <button style="background-color: transparent; border: none;" id="toggle-sidebar" class="hamburger">
                <img src="https://michoacan.gob.mx/cdn/img/logos/dependencias/telebachillerato.svg" height="35px;"
                    alt="logo">
            </button>
            <div>
                <h2 class="centrar">Telebachillerato Michoacan</h2>
            </div>
            <div class="user-info">
                <div class="user-name">Angel Jair Reyna Maldonado &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo $nombre_usuario; ?>
                </div>
                <br>
                <div class="notifications">
                    <a href="#">
                      <img src="https://cdn.icon-icons.com/icons2/1372/PNG/512/notifications_90868.png" height="20px;" alt="notificaciones">
                    </a>
                  </div>
                </div>
                <div class="notification-popup">
                  <div class="notification-content">
                    <!-- Aquí puedes agregar el contenido de tus notificaciones -->
                    <div class="notification">
                        <div class="notification-con">Jose Eduardo Vergara Garcia
                            <?php echo $nombre_usuario; ?>
                            <p>Subio Calificaciones</p>
                        </div>
                    </div>
                    <div class="notification">
                        <div class="notification-con">Angel Jair Reyna Maldonado
                            <?php echo $nombre_usuario; ?>
                            <p>Subio Calificaciones</p>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="movi-ima-container">
                <img class="movi-ima"
                    src="https://www.michoacan.gob.mx/wp-content/uploads/2021/09/cropped-LogoGobMich-Escudo-Guinda-600-600.png"
                    height="35px;" alt="logo">
            </div>
        </header>
        <div class="overlay" id="sidebar-overlay"></div>
        <aside class="sidebar centrar">
            <div>
                <br>
                <button style="background-color: transparent; border: none; cursor:pointer;" id="close-sidebar"
                    class="close-button">
                    <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 52 52"
                        enable-background="new 0 0 52 52" xml:space="preserve">
                        <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0
              L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29
              h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z" />
                    </svg>
                </button>
                <div class="centrar">
                    <h1>MÓDULO</h1>
                </div>
                <ul class="modules">
                    <br>
                    <li><a href="" style="text-decoration: none; color: black;"> Módulo 1</a></li>
                    <li><a href="" style="text-decoration: none; color: black;"> Módulo 2</a></li>
                    <li><a href="" style="text-decoration: none; color: black;"> Módulo 3</a></li>
                    <li><a href="" style="text-decoration: none; color: black;"> Módulo 4</a></li>
                    <li><a href="" style="text-decoration: none; color: black;"> Módulo 5</a></li>
                    <li><a href="" style="text-decoration: none; color: black;"> Módulo 6</a></li>
                    <li><a href="" style="text-decoration: none; color: black;"> Módulo 7</a></li>
                    <li><a href="" style="text-decoration: none; color: black;"> Módulo 8</a></li>
                    <li class="logout"><a href="">Cerrar Sesión</a></li>
                </ul>
            </div>
        </aside>
        <main>