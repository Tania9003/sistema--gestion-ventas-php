<?php 
include("DBE.php");
/*class User{*/
    //metodo para listar usuarios
function getEmpleado(){
    $sql="SELECT * FROM tblempleados  WHERE  emp_estado='A'";
    $res=Conectar()->query($sql);
    return $res;

}
function obtenerEmpleadoxID($id){
    //para obtener informacion en el formulario a travez del id
    $sql="SELECT * FROM tblempleados WHERE emp_id=$id";
    $res=Conectar()->query($sql);
    return $res;
}
function createEmpleado($ced,$nom,$ape,$sueldo){
    //estado A quemado
    //lo unico que cambia es la consulta SQL
    $sql="INSERT INTO tblempleados (emp_cedula,emp_nombre,emp_apellido,emp_sueldo,emp_estado) VALUE('$ced','$nom','$ape','$sueldo','A')";
    $res=Conectar()->query($sql);
    return $res; 


}
function deleteEmpleado($id){
    
    $sql="UPDATE tblempleados SET emp_estado='I' WHERE emp_id=$id";
    $res=Conectar()->query($sql);
    return $res;
}

function actualizarEmpleado($id,$ced,$nom,$ape,$sueldo){
    $sql="UPDATE tblempleados SET emp_cedula='$ced',emp_nombre='$nom',emp_apellido='$ape',emp_sueldo='$sueldo' WHERE emp_id=$id";
    $res=Conectar()->query($sql);
    return $res;
}
/*function selectPerfiles(){
    $sql="SELECT * FROM tblperfil";
    $res=Conectar()->query($sql);
    return $res;
    }*/

/*}*/

?>