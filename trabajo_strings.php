<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .resaltar{
                color: #F00;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
            $variable1="Casa";
            $variable2="CASA";
            $resultado=strcmp($variable1,$variable2); // Devuelve 1 si no son iguales y 0 si son iguales.
            if(!$resultado){
                echo "Coinciden";
            }else{
                echo "No coinciden";
            }
        ?>
    </body>
</html>