<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Practica CheckBox</title>
</head>
<body>
    <h2> PRACTICA APARATOS ELECTRONICOS</h2>
    <form method="POST" action="index.php">
        <br><br>
        <label>Seleccione los aparatos Electronicos que tienes en casa</label><br>
        <input type="checkbox" name="aparatos[]" value="refrigerador" id="chrefri"><label for="chrefri"> REFRIGERADOR </label></input><br>
        <input type="checkbox" name="aparatos[]" value="microondas" id="chmicro"><label for="chmicro"> MICROONDAS </label></input><br>
        <input type="checkbox" name="aparatos[]" value="tv" id="chtv"><label for="chtv"> TV </label></input><br>
        <input type="checkbox" name="aparatos[]" value="laptop" id="chlap"><label for="chlap"> LAPTOP </label></input><br>
        <input type="checkbox" name="aparatos[]" value="lavadora" id="chlavadora"><label for="chlavadora"> LAVADORA </label></input>
        <br><br>
        <input type="submit" id="btn-imprimir" value="IMPRIMIR"><br><br>
    </form>
    <?php
        $aparatos = $_POST["aparatos"];

        if(!empty($aparatos)){
             foreach($aparatos as $electronico){
                 echo "$electronico <br> ";
            }
        }else{
             echo "No selecciono aparatos";
        }

    ?>
    
</body>
</html>