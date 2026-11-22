<?php
/*dentro del controlador manipular las funciones 
o metodos creados en el modelo en este caso vamos a manipular el metodo para insertar
*/
 
include("../Modelogt/empleado.php");

if($_GET){
   // echo "ok";
   $id=$_GET['id'];
   $res=deleteEmpleado($id);
   if($res){
       echo "<script>
       alert('Empleado Eliminado');
       location.href='../Vistagt/Empleados.php';
       </script>";
   }else{
    echo "<script>
    alert('Empleado no Eliminado');
    location.href='../Vistagt/Empleados.php';
    </script>";
   }

}
if(isset($_POST['btnnuevo'])!=""){
    $ced=$_POST['txtced'];
    $nom=$_POST['txtnom'];
    $ape=$_POST['txtape'];
    $sueldo=$_POST['txtsueldo'];
   
    $resultado=createEmpleado($ced,$nom,$ape,$sueldo);
if($resultado){
    echo "<script>
    alert('Registro Exitoso');
    location.href='../Vistagt/Empleados.php';

    </script>";
}else{
    echo "<script>
    alert('No Registrado');
    location.href='../Vistagt/empleados.php';

    </script>";
}
}
if(isset($_POST['btnmodificar'])!=""){
    $ced=$_POST['txtced'];
    $nom=$_POST['txtnom'];
    $ape=$_POST['txtape'];
    $sueldo=$_POST['txtsueldo'];
    $id=$_POST['txtid'];
    
    $resultado=actualizarempleado($id,$ced,$nom,$ape,$sueldo);
if($resultado){
    echo "<script>
    alert('Registro Modificado');
    location.href='../Vistagt/Empleados.php';

    </script>";
}else{
    echo "<script>
    alert('No Modificado');
    location.href='../Vistagt/empleados.php';

    </script>";
}
}
