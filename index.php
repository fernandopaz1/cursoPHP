<!doctype html>
<html>
<meta charset="UTF-8"/>
<head>
    <title>Hola mundo</title>
    <link rel="stylesheet" href="styles.css">
</head>

    <body>

        <div>
            <p>Esta parte se ejecuta antes en el navegador ya que es codigo html. <br>
                La siguiente parte se ejecuta en el servidor ya que es codigo php.
            </p>
        </div>
        
        <div class="php">
            <?php

                print "Bievenidos al curso de php <br>";
                print "Hola <br>";
                print "Hasta la proxima <br>";

                print "El servidor ejecuta cada linea y luego hace el salto de linea correspondiente <br>";
            ?>
        </div>

        <div>
        <p class="firstline">
            Para que este archivo se puede ejecutar debe estar en el directorio /var/www/html/. Los archivos que pongamos en este directorio no tienen permiso de escritura por lo que tendremos
            que acceder como superusuario cada vez que queremos modificar index.php <br>
        </p>
        
        <p class="firstline">
            Tampoco es conveniente cambiar los permisos del archivo o la carpeta para poder modificarlos ya que no es una práctica segura. Una mejor forma es crear un enlace simbólico que nos permita tener a index.php y otros proyectos en una carpeta
            a la que podamos acceder y al mismo tiempo pueda correr en apache<br>
        </p>
            
        </div>

        <div>
        <p class="firstline">Para esto corremos los siguientes comando: <br></p>
        <ul>
            <li>mkdir cursoPHP</li>
            <li>sudo ln -s  /home/$USER/cursoPHP/ /var/www/html</li>
        </ul>

        <p class="firstline">
            Esto creará una carpeta llamada cursoPHP en la direccion /home/$USER/cursoPHP/.  Con el siguiente comando lo que haces es crear un link de dicho directorio en la direccion /var/www/html por lo que los archivos que pongamos
            en nuestros archivos en cursoPHP serán accesibles desde el dierectorio /var/www/html.
        </p>

        </div>
        
    </body>

</html>
