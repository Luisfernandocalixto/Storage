<style>

.cuerpoCarrucel {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 30px;
}

.imagenC {
    width: 1000px;
    height: 450px;
    image-rendering: pixelated;
    object-fit: fill;
    object-position: center;
}

@media (min-width:480px) and (max-width: 1024px) {
    .imagenC {
        width: 900px;
    }
}

@media (min-width:1024px) and (max-width: 1400px) {
    .imagenC {
        width: 1000px;
    }
}

.contener-todo {
    position: relative;
    max-width: 1000px;
    width: 100%;
    border-radius: 6px;
    overflow: hidden;
}


.carrucelA {
    display: flex;
    transform: translate3d(0, 0, 0);
    transition: all 600ms;
    -webkit-animation-name: automatico;
    -webkit-animation-duration: 6.5s;
    -webkit-animation-direction: alternate;
    -webkit-animation-fill-mode: forwards;
    -webkit-animation-iteration-count: infinite;
    animation-name: automatico;
    animation-duration: 6.5s;
    animation-direction: alternate;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
}

.elemento-carrucel {
    position: relative;
    display: flex;
    flex-direction: column;
    flex-shrink: 0;
    flex-grow: 0;
    max-width: 100%;
}

.paginacion {
    position: absolute;
    bottom: 20px;
    left: 0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    width: 100%;
}

.paginacion-elemento {
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 2px solid white;
    width: 16px;
    height: 16px;
    border-radius: 4px;
    overflow: hidden;
    cursor: pointer;
    background: rgba(255, 255, 255, 0.5);
    margin: 0 10px;
    text-align: center;
    transition: all 300ms;
}

.paginacion-elemento:hover {
    transform: scale(2);
}

.paginacion-elemento .imagenC {
    display: inline-block;
    max-width: none;
    height: 100%;
    transform: scale(1);
    opacity: 0;
    transition: all 300ms;
}

.paginacion-elemento:hover .imagenC {
    opacity: 1;
    transform: scale(1);
}


input[id="1"]:checked~.carrucelA {
    animation: none;
    transform: translate3d(0, 0, 0);
}

input[id="1"]:checked~.paginacion .paginacion-elemento[for="1"] {
    background: #fff;
}

input[id="2"]:checked~.carrucelA {
    animation: none;
    transform: translate3d(calc(-100% * 1), 0, 0);
}

input[id="2"]:checked~.paginacion .paginacion-elemento[for="2"] {
    background: #fff;
}


input[id="3"]:checked~.carrucelA {
    animation: none;
    transform: translate3d(calc(-100% * 2), 0, 0);
}

input[id="3"]:checked~.paginacion .paginacion-elemento[for="3"] {
    background: #fff;
}

input[id="4"]:checked~.carrucelA {
    animation: none;
    transform: translate3d(calc(-100% * 2), 0, 0);
}

input[id="4"]:checked~.paginacion .paginacion-elemento[for="4"] {
    background: #fff;
}


@keyframes automatico {
    25% {
        transform: translate3d(calc(-100% * 0), 0, 0);
    }

    50% {
        transform: translate3d(calc(-100% * 1), 0, 0);
    }

    75% {
        transform: translate3d(calc(-100% * 2), 0, 0);
    }

    100% {
        transform: translate3d(calc(-100% * 3), 0, 0);

    }

}

@-webkit-keyframes automatico {
    25% {
        transform: translate3d(calc(-100% * 0), 0, 0);
    }

    50% {
        transform: translate3d(calc(-100% * 1), 0, 0);
    }

    75% {
        transform: translate3d(calc(-100% * 2), 0, 0);
    }

    100% {
        transform: translate3d(calc(-100% * 3), 0, 0);

    }

}

</style>


<?php
include("config.php");
include("firebaseRDB.php");


$db = new firebaseRDB($databaseURL);
?>

<?php
$data = $db->retrieve("film");
$data = json_decode($data, 1);

if (is_array($data)) {
    foreach ($data as $id => $film) {

?>

        <div class="cuerpoCarrucel">

            <div class="contener-todo">

                <input type="radio" id="1" name="imagen" hidden />
                <input type="radio" id="2" name="imagen" hidden />
                <input type="radio" id="3" name="imagen" hidden />
                <input type="radio" id="4" name="imagen" hidden />

                <div class="carrucelA">

                    <div class="elemento-carrucel">

                        <a <?php echo "href='{$film['enlace']}' " ?>>

                            <img class="imagenC" <?php echo " src='{$film['imagen']}' " ?>>

                        </a>

                    </div>

                    <div class="elemento-carrucel">

                        <a <?php echo "href='{$film['enlace2']}' " ?>>

                            <img class="imagenC" <?php echo " src='{$film['imagen2']}' " ?>>

                        </a>

                    </div>

                    <div class="elemento-carrucel">

                        <a <?php echo "href='{$film['enlace3']}' " ?>>

                            <img class="imagenC" <?php echo " src='{$film['imagen3']}' " ?>>

                        </a>

                    </div>

                    <div class="elemento-carrucel">

                        <a <?php echo "href='{$film['enlace4']}' " ?>>

                            <img class="imagenC" <?php echo " src='{$film['imagen4']}' " ?>>

                        </a>

                    </div>

                </div>

                <div class="paginacion">

                    <label class="paginacion-elemento" for="1">
                        <img class="imagenC" src="">
                    </label>

                    <label class="paginacion-elemento" for="2">
                        <img class="imagenC" src="">
                    </label>

                    <label class="paginacion-elemento" for="3">
                        <img class="imagenC" src="">
                    </label>

                    <label class="paginacion-elemento" for="4">
                        <img class="imagenC" src="">
                    </label>

                </div>

            </div>

        </div>

<?php

    }
}

?>