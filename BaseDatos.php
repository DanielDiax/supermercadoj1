<?php

class BaseDatos{

//atributos
public $usuarioBD="root";
public $passwordBD="";

//constructor
public function __construct(){}

//metodos
public function conectarBD()
{

  

   try{
        $datosBD="mysql:host=localhost;dbname=tiendajueves";
        $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
        echo ("exito");
        return($conexionBD);

   }catch(PDOException $error){
       echo($error->getMessage());

   }


}

public function agregarDatos($consultaSQL)
{

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


public function consultarDatos ($consultaSQL)
{
    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //preparar la consulta
    $consultarDatos=$conexionBD->prepare($consultaSQL);

    //establecer el metodo de consulta
    $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);

    //EjecutaR LA OPERAcion en la base de datos "BD"
    $consultarDatos->execute();

    //Retornar los Datos
    return($consultarDatos->fetchAll());

}


public function eliminarDatos ($consultaSQL)
{
    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //preparar la consulta
    $eliminarDatos=$conexionBD->prepare($consultaSQL);

    //ejecutar la consulta
    $resultado=$eliminarDatos->execute();

    if($resultado){
        echo("Usuario eliminado");
    }else{
        echo("error");
    }

}




}





?>