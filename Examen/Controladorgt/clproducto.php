<?php
include("../Modelogt/producto.php");



if(isset($_POST['btnnuevo'])!=""){
    
    $cod=$_POST['txtcod'];
    $nom=$_POST['txtnom'];
    $pre=$_POST['txtpre'];
    $stock=$_POST['txtstock'];
    
    $resultado=createProducto($cod,$nom,$pre,$stock);
if($resultado){
    echo "<script>
    alert('Registro Exitoso');
    location.href='../Vistagt/Productos.php';

    </script>";
}else{
    echo "<script>
    alert('No Registrado');
    location.href='../Vistagt/Productos.php';

    </script>";
}
}
?>