<!DOCTYPE html>
<html>
    <head>
        
        
    </head>
    <body>
        <form action="11.php" method="post">
            Titulo: <input type="text" name="titulo"><br>
            Autor: <input type="text" name="autor"><br>
            Editorial: <input type="text" name="editorial"><br>
            Paginas: <input type="text" name="paginas"><br>
            <input type="submit" value="Enviar">
        

        <?php
            if(isset($_POST) && !empty($_POST)){
                
                echo "Titulo: $_POST[titulo],autor:  $_POST[autor],editorial:  $_POST[editorial],paginas:  $_POST[paginas]";
                
                echo "<hr><pre>"; 
            }
            else {
                echo "Todavía no hemos recibido nada!";
            }
        ?>
    </body>
</html>