<!doctype html>
<html>
<meta charset="UTF-8"/>
<head>
    <title>Ámbito de las viariables</title>
    <link rel="stylesheet" href="styles.css">
</head>

    <body>
        <div class="titulo">
            <h1>Ambito de las variables</h1>
        </div>
        <h2>Variables y su ámbito:</h2>

        <div>
            <h3>Variable local</h3>
            <p class="firstline">
                Declarada dentro de una funcion. Sólo es visible y accesible dentro de la función.
            </p>


            <h3>Variable global</h3>
            <p class="firstline">
                Declarada en cualquier lugar, visible y accesible desde cualquier lugar dentro del código.
            </p>



            <h3>Variable super global</h3>
            <p class="firstline">
                Es declarada como un array y es accesible inlcuso fuera del script php.
                Se utiliza para enviar información fuera del programa.
            </p>
        </div>
                
        <div class="php">
            <?php
                echo "Declaro la variable global nombre, que tiene guardada mi nombre<br>";
                
                echo "Si creo la funcion cambiar nombre que cambia mi nombre por maria y lo
                     llamo, no pasa nada<br>";

                echo "Esto ocurre porque las variables estan en dos ambitos diferentes<br>";
   
                echo "Dentro de la funcion no puede acceder a las variables definidas fuera y 
                        tampoco el caso contrario<br>";
    
                echo "Esto tiene sentido ya que si usamos include podriamos sobreescribir variables 
                        nuestra debido a que no controlamos que nombres de variables usan en el 
                        archivo externo<br>";

                function cambiarNombre(){
                    global $nombre;
                    $nombre="Maria";
                }
                
                $nombre="Fernando";

                

                cambiarNombre();
                echo "<br>Imprimo la variable nombre:  ".$nombre."<br>";

                echo "<br>Para cambiar el ambito de una variable se utliliza global '$'nombre.
                        Esto debe estar dentro de la función sino no funciona.<br>";

            ?>
        </div>
 
    </body>

</html>