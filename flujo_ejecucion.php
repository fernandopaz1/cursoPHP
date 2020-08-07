<!doctype html>
<html>
<meta charset="UTF-8"/>
<head>
    <title>Flujo de ejecución</title>
    <link rel="stylesheet" href="styles.css">
</head>

    <body>
        <div>
            <p class="firstline">
                En php el flujo de ejecución se realiza de arriba abajo, es decir primero se ejecutan 
                las  lineas de código que se encuentra mas arriba, a menos este flujo sea interrumplido 
                por instrucciones como son los condicionales.
            </p>
            <p class="firstline">
                Un ejemplo de esto es la definición de funciones. El codigo dentro de la función no será ejecutado
                hasta que se llame a la función. Es decir que por estar primero no necesariamente se ejecuta antes.
            </p>
        </div>
        
        <div class="php">
            <?php
                echo "Este es el primer mensaje<br>";
                
                include("proporciona_datos.php");                


                echo "Este es el segundo mensaje<br>";
                dameDatos();
            ?>
        </div>

        <div class="php">
            <?php
                echo "Este es un segundo bloque de php abajo del anterior";
            ?>
        </div> 

        <div>
            <p class="firstline">
                La funcion include al incluir un archivo, si este no 
                esta entonces solo tira error en esa parte, las demas lineas son ejecutadas.
            </p>
            <p class="firstline">
            Si usamos require y el archivo no se encuntra entonces no se ejecuta nada.
            Esto se debe a que con require decimos que el programa requerido es fundamental.
            </p>
        </div>
    </body>

</html>
