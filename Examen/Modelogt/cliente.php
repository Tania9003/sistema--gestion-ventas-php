<?php
include("DBE.php");
function getCliente(){
    $sql="SELECT * FROM tblclientes WHERE  cli_estado='A'";
    $res=Conectar()->query($sql);
    return $res;

}
function createCliente($iden,$nom,$ape,$tel,$dir){
    //estado A quemado
    //lo unico que cambia es la consulta SQL
    $sql="INSERT INTO tblclientes (cli_identificacion,cli_nombre,cli_apellido,cli_telefono,cli_direccion,cli_estado) 
    VALUE('$iden','$nom','$ape','$tel','$dir','A')";
    $res=Conectar()->query($sql);
    return $res; 


}
?>