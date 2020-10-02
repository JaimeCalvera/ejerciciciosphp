<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <form action="" method="post">
        Nombre: <input type="text" name="name"><br>
        <input type="submit" value="enviar">
        
        </form>
        <?php
           

            if(!empty($_POST)){
                echo "Bienvenido";

            }else{
                echo "No se ha puesto nada";
                
            }
        ?>
        
    </body>
</html>