<?php

class BaseDatos{

//atributos
public $usuarioBD="root";
public $passwordBD="";

//constructor
public function __construct(){}

//metodos
public function conectarBD(){

  

   try{
        $datosBD="mysql:host=localhost;dbname=tiendajueves";
        $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
        echo ("exito");
        return($conexionBD);

   }catch(PDOException $error){
       echo($error->getMessage());

   }


}

public function agregarDatos($consultaSQL){

        //establecer una conexion
        $conexionBD=$this->conectarBD();

        //preparar la consulta
        $insertarDatos=$conexionBD->prepare($consultaSQL);

        //ejecutar la consulta
        $resultado=$insertarDatos->execute();

        //verifico el resultrado
    if($resultado){
        echo("Usuario Agregado");
    }else{
        echo("error");
    }

}


}





?>