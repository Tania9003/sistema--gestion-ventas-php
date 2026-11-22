<?php
include("DBE.php");
//listar todos los productos activos
function getProducto(){
    $con=Conectar();
    $sql="SELECT * FROM tblproductos WHERE  pro_estado='A'";
    $res=$con->query($sql);
    return $res;

}
//bsucar un producto por ID
function getProdcutoById($id){
    $con=Conectar();
    $stmt=$con->prepare("SELECT * FROM tblproductos WHERE  pro_id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc(); 
}
function createProducto($cod,$nom,$pre,$stock){
    //estado A quemado
    
    $con=Conectar();
    $stmt=$con->prepare("INSERT INTO tblproductos (pro_codigo,pro_nombre,pro_precio,pro_stock,pro_estado) 
    VALUE(?,?,?,?,'A')");
    //Tipos de datos s=string, d= double, i= integer
    $stmt->bind_param("ssdi",$cod,$nom,$pre,$stock);
    return $stmt->execute(); 


}
?>