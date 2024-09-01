    <link rel="stylesheet" href="./css/carrucel.css" type="text/css">
    <meta name="author" content="TeamAlphaDinamita">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php
    include("./Administrador/config.php");
    include("./Administrador/firebaseRDB.php");

    $db = new firebaseRDB($databaseURL);
    ?>

    <?php
    $data = $db->retrieve("film");
    $data = json_decode($data, 1);

    if (is_array($data)) {
        foreach ($data as $id => $film) {
            echo "   
<div>
    <section class='container2'>
        <div class='bd-example'>
            <div id='carouselExampleCaptions' class='carousel slide' data-ride='carousel'>
                <ol class='carousel-indicators'>
                    <li data-target='#carouselExampleCaptions' data-slide-to='0' class='active'></li>
                    <li data-target='#carouselExampleCaptions' data-slide-to='1'></li>
                    <li data-target='#carouselExampleCaptions' data-slide-to='2'></li>
                    <li data-target='#carouselExampleCaptions' data-slide-to='3'></li>
                </ol>
                <div class='carousel-inner'>
                    <div class='carousel-item active'>
                        <a href='{$film['enlace']}'>
                            <img src='{$film['imagen']}' class='d-block w-100'
                                alt='...'>
                        </a>
                        <div class='carousel-caption d-none d-md-block'>
                            <br>
                            <p><a href=''></a></p>
                        </div>
                    </div>
                    <div class='carousel-item'>
                        <a href='{$film['enlace2']}'>
                            <img src='{$film['imagen2']}' class='d-block w-100'
                                alt='...'>
                        </a>
                        <div class='carousel-caption d-none d-md-block'>
                            <br>
                            <p><a href=''></a></p>
                        </div>
                    </div>
                    <div class='carousel-item'>
                        <a href='{$film['enlace3']}'>
                            <img src='{$film['imagen3']}' class='d-block w-100'
                                alt='...'>
                        </a>
                        <div class='carousel-caption d-none d-md-block'>
                            <br>
                            <p><a href=''></a></p>
                        </div>
                    </div>
                    <div class='carousel-item'>
                        <a href='{$film['enlace4']}'>
                            <img src='{$film['imagen4']}' class='d-block w-100'
                                alt='...'>
                        </a>
                        <div class='carousel-caption d-none d-md-block'>
                            <br>
                            <p><a href=''></a></p>
                        </div>
                    </div>
                </div>
                <a class='carousel-control-prev' href='#carouselExampleCaptions' role='button' data-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='carousel-control-next' href='#carouselExampleCaptions' role='button' data-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>
            </div>
        </div>
    </section>
</div> 

 
";
        }
    }

    ?>