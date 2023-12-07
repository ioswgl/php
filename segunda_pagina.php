<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $nombre="Luis";
            $edad=38;
            print "El nombre del usuario es $nombre <br>"; // Imprime el valor de la variable
            print 'El nombre del usuario es $nombre <br>'; // Imprime el nombre de la variable de forma literal
            echo "El nombre es " . $nombre . " y tiene " . $edad . " años <br>"; // echo admite imprimir valores de variables o expresiones para que echo vaya imprimiendo
            // print es una función que devuelve siempre el valor 1. Se toma más tiempo para imprimir en pantalla xq tiene que hacer más procesos internos.
            // echo es una expresión
            echo $nombre,$edad;
        ?>
    </body>
</html>