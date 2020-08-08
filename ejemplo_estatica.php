<!doctype html>
<html>
<meta charset="UTF-8"/>
<head>
    <title>Variables estáticas</title>
    <link rel="stylesheet" href="styles.css">
</head>

    <body>
        <div class="titulo">
            <h1>Variables estáticas</h1>
        </div>
        <div>
            <p class="firstline">
                En este caso vamos a crear la funcion incrementa variable que inicializa
                una variable contador en cero, aumenta su valor y la imprime.
            </p>
            <p>
                Si llamamos varias veces a esta función siempre imprime lo mismo, y eso se 
                debe a que cuando la función termina de ejecutarse, las variables internas
                se destruyen.
            </p>
            <p class="firstline">
                Si queremos que dicha variable se conserve tenemos que crear una variable estática
                agregando la palabra static antes de la declaracion de la variable.
            </p>
            
            <p class="firstline">
                El tener variables estáticas nos sirve ya que no queremos crear variables globales
                que puedan ser accedidas desde otras funciones.
            </p>

        </div>


        <div class="php">
            <?php


            function incrementa_variable(){
                static $contador=0;
                $contador++;
                echo $contador . "<br>";
            }
            incrementa_variable();
            incrementa_variable();
            incrementa_variable();
            incrementa_variable();  

            ?>
        </div>

        
    </body>

</html>
