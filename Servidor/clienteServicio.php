<?php
class ClienteServicio {

    public function conexionServicio(){
        $options = array("uri" => "http://localhost/ServiciosWeb/Servicio/", "location" => "http://localhost/ServiciosWeb/Servicio/serverSoap.php");
        $cliente = new SoapClient(null, $options);
        return $cliente;
    }

    public function suma($num1, $num2){
        try {
            $servicio = $this->conexionServicio();
            $respuesta = $servicio->suma($num1, $num2);
            return $respuesta;
        } catch (SoapFault $e) {
            return "Error: ". $e->getMessage();
        } 
    }  

    public function resta($num1, $num2){
        try {
            $servicio = $this->conexionServicio();
            $respuesta = $servicio->resta($num1, $num2);
            return $respuesta;
        } catch (SoapFault $e) {
            return "Error: ". $e->getMessage();
        } 
    }  

    public function multiplicacion($num1, $num2){
        try {
            $servicio = $this->conexionServicio();
            $respuesta = $servicio->multiplicacion($num1, $num2);
            return $respuesta;
        } catch (SoapFault $e) {
            return "Error: ". $e->getMessage();
        } 
    }  

    public function division($num1, $num2){
        try {
            $servicio = $this->conexionServicio();
            $respuesta = $servicio->division($num1, $num2);
            return $respuesta;
        } catch (SoapFault $e) {
            return "Error: ". $e->getMessage();
        } 
    }  
}
?>