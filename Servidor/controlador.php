<?php
class Controlador{

    public function resultado($num1, $num2){
        include("clienteServicio.php");
        $calculadora = new ClienteServicio();
        if(isset($_GET['suma'])){
            $solucion = $calculadora->suma($num1, $num2);
            $texto = "La suma de ".$num1." y ".$num2." = ".$solucion;
        }
        if(isset($_GET['resta'])){
            $solucion = $calculadora->resta($num1, $num2);
            $texto = "La resta de ".$num1." y ".$num2." = ".$solucion;
        }
        if(isset($_GET['division'])){
            $solucion = $calculadora->division($num1, $num2);
            $texto = "La multiplicacion de ".$num1." y ".$num2." = ".$solucion;
        }
        if(isset($_GET['multiplicacion'])){
            $solucion = $calculadora->multiplicacion($num1, $num2);
            $texto = "La division de ".$num1." y ".$num2." = ".$solucion;
        }
        return $texto;
    }
}
?>