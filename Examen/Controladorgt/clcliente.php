<?php
include("../Modelogt/cliente.php");



if(isset($_POST['btnnuevo'])!=""){
    
    $iden=$_POST['txtiden'];
    $nom=$_POST['txtnom'];
    $ape=$_POST['txtape'];
    $tel=$_POST['txttel'];
    $dir=$_POST['txtdir'];
   
    $resultado=createCliente($iden,$nom,$ape,$tel,$dir);
if($resultado){
    echo "<script>
    alert('Registro Exitoso');
    location.href='../Vistagt/clientes.php';

    </script>";
}else{
    echo "<script>
    alert('No Registrado');
    location.href='../Vistagt/clientes.php';

    </script>";
}
}
?>