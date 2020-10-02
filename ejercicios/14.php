<!DOCTYPE html>
<html>
    <head>
        
        
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="numero1">
            <select name="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="numero2">
            <input type="submit" name="send">
        </form>

    <?php


        if($_POST ["numero1"] && $_POST ["numero2"] !=""){

            if($_POST["operador"] == "+"){
                $resultado = $_POST["numero1"] + $_POST["numero2"];

            }elseif($_POST["operador"] == "-"){
                $resultado = $_POST["numero1"] - $_POST["numero2"];

            }elseif($_POST["operador"] == "*"){
                $resultado = $_POST["numero1"] * $_POST["numero2"];

            }elseif($_POST["operador"] == "/"){
                $resultado = $_POST["numero1"] / $_POST["numero2"];

            }
                echo "El resultado de la operación es: ".$resultado;
        }
        else {
            echo "Faltan valores";
        }
        

    ?>

    </body>
</html>

