<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("../Servidor/controlador.php");
    if(isset($_GET["num1"])and isset($_GET["num2"])) {
        $controlador = new Controlador();
        echo $controlador->resultado($_GET['num1'], $_GET['num2']);
    }
    ?>
    <form action='' method='get'>
        <label for='num1'>numero 1:</label>
        <input type='number' name='num1' required></br>
        <label for='num2'>numero 2:</label>
        <input type='number' name='num2' required></br>
        <span><input type='submit' name='suma' value='suma'></span>
        <span><input type='submit' name='resta' value='resta'></span>
        <span><input type='submit' name='division' value='division'></span>
        <span><input type='submit' name='multiplicacion' value='multiplicacion'></span>
    </form>    
</body>
</html>
