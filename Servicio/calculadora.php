<?php
class Calculadora{
    public function suma($num1, $num2){
        $resultado = $num1 + $num2;
        return $resultado;
    }

    public function resta($num1, $num2){
        $resultado = $num1 - $num2;
        return $resultado;
    }

    public function multiplicacion($num1, $num2){
        $resultado = $num1 * $num2;
        return $resultado;
    }

    public function division($num1, $num2){
        $resultado = $num1 / $num2;
        return $resultado;
    }
}

?>