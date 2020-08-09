<!doctype html>
<html>
<meta charset="UTF-8"/>
<head>
    <title>Hola mundo</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <style>
        .resaltar{
            color:#F00;
            font-weigth:bold;
        }
    </style>

    <body>
        
        <div class="titulo">
            <h1>Strings</h1>
        </div>

        <div>
            <p class="firstline"> 
                    Cuando queremos introducir una variable tipo string dentro de otra
                    suele presentarno error porque el abrir comillas dentro de un string
                    puede interpretarse como la clausura del string.<br>
                    En este caso se utiliza la comilla simple (si nuestro string comienza con la doble)
                    o la doble en caso contrario.
            </p>
            <p class="firstline"> 
                De esta forma podremos agregar tags de html en codigo php con sus correspondientes
                clases<br> echo "&ltp class='resaltar'&gt Mi frase &lt/p&gt" 
            </p>

            <p class="firstline"> 
                Otra forma es introducir un string dentro de otro es tilizando \ antes de las
                comillas: <br> 
                echo "&ltp class=\"resaltar\"&gt Mi frase &lt/p&gt"

            </p>


            <p class="firstline"> 
                Tambien es importante distinguir el uso de comillas dobles de las simples.<br>
                Las dobles por ejemplo en el caso echo "Hola $nombre"; interpretan que hay que 
                concatenar el string Hola con el contenido de la variable $ nombre.<br>
                En cambio conecho 'Hola $nombre' lo toma como literal e imprime lo que hay
                dentro de las comillas. 

            </p>
        </div>
            
        <div class="php">
            <?php
                $nombre="Fernando";              
                
                echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";

                echo 'Hola $nombre';
            ?>
        </div>

        <h2>Comparación de strings</h2>
        <h3>strcmp</h3>

        <div class="firstline">
            String compare: compara dos strings teniento en cuenta diferencias
            entre mayúsculas y minúsculas.
        </div>

        <h3>strcasecmp</h3>
        <div class="firstline">
            String case compare: compara dos strings sin tener en cuenta diferencias.
        </div>

    </body>

</html>
