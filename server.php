<?php
        require_once "lib/nusoap.php";

        function getColores($datos) {
                if ($datos == "Colores") {
                    return join (",", array(
                        "Rojo",
                        "Amarillo",
                        "Verde",
                        "Naranja",
                        "Azul"
                    ));
                }
                else {
                    return "No hay colores";
                }
        }
        $server = new soap_server();
        $server ->register("getColores");
        if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input');
            $server->service($HTTP_RAW_POST_DATA);

        ?>
