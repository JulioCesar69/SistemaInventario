<?php
    //conexion a la base de datos
    function conexion(){
        $pdo=new PDO('mysql:host=localhost;dbname=inventario','root',''); 
        return $pdo;
    }  
    //funcion para verificar datos
    function verificar_datos($filtro,$cadena){
        if (preg_match("/^".$filtro."$/",$cadena)) {
            return false;
        } else {
            return true;
        }
    }
    $nombre="carlos7";
    if(verificar_datos("[a-zA-A]{6,10}",$nombre)){
        echo "Los datos no coinciden";
    }
?>