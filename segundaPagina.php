<!doctype html>
<html>

<meta charset="UTF-8"/>
    <link rel="stylesheet" href="styles.css">
    <title>Segunda Página</title>
</head>
    
    <body>
        <p>
            Los comentarios en php se escriben con // <br>
            y cuando es de varias lineas se abre con /* y se cierran con */  (como en C)     
        <br></p>
        <p>La siguiente parte se ejecuta en el servidor ya que es codigo php</p>
        
        <h2>Variables</h2>
            <div>
                <p class= "firstline"> Las variables empiezan siempre con el simbolo $, por ejemlo $var1. No pueden comenzar con valores numericos ni tampoco tener simbolos extraños (no alfanumericos). 
                    PHP es debilmente tipado por lo que no es necesario declarar el tipo de la variable, pero esos si
                    cada linea debe terminar con ; como en Java o C
                </p>
            </div>
            
        <div class="php">    
            <?php

                $nombre="Fernando";  
                print "Guardo en la variable nombre el string " . $nombre;
                
                $edad =27;
                
                print "<br>En la variable edad guardo el entero " . $edad;

                echo "<br>Ahora imprimo nombre con la expresion echo " . $nombre;    

                print "<p>Echo admita la siguiente entrada  echo nombre,edad</p>";
                echo $nombre,$edad;
                print "<p>echo es una expresion por lo que gasta menos recursos de print que es una función</p>"
            ?>
        </div>
    </body>

</html>