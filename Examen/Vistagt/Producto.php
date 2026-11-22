<?php 
include("../Templategt/template.php");
include("../Modelogt/producto.php");
$id=$_GET['id'];
if($id=="0") { 
    //formulario para ingresar nuevo registro a la tabla

?>
<br>
<div class="container-fluid">
     <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h3>Registrar Producto</h3>
              
          </div>
                <div class="card-body">
                    <form action="../Controladorgt/clproducto.php" method="POST">
                        <input type="text" class="form-control" name="txtcod" placeholder="Codigo"require/>
                        <input type="text" class="form-control" name="txtnom" placeholder="Nombre Producto"require/>
                        <input type="text" class="form-control" name="txtpre" placeholder="Precio" require/>
                        <input type="text" class="form-control" name="txtstock" placeholder="Stock" require/>
                        
                        
                        
                        <input type="submit" name="btnnuevo" value="Crear" class="btn btn-success"/>
                    </form>
                 </div>
         </div>
</div>
<?php 
}else{
    //en caso de seleccionar modificar se despliega este formulario
    $res1=obtenerEmpleadoxID($id);
    foreach($res1 as $row){


    ?>




<br>
<div class="container-fluid">
     <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h3>Modificar Empleado</h3>
          </div>
                <div class="card-body">
                    <form action="../Controladorgt/clempleado.php" method="POST">
                        <input type="text" value="<?php echo $id;?>" name="txtid"/>
                        <input type="text" class="form-control" name="txtced" require value="<?php echo $row['emp_cedula']?>"/>
                        <input type="text" class="form-control" name="txtnom" require value="<?php echo $row['emp_nombre']?>"/>
                        <input type="text" class="form-control" name="txtape" require value="<?php echo $row['emp_apellido']?>"/>
                        <input type="number" step="0.01" class="form-control" name="txtsueldo" require value="<?php echo $row['emp_sueldo']?>"/>
                        


                        
                        <input type="submit" name="btnmodificar" value="Modificar" class="btn btn-success"/>
                    </form>
                 </div>
         </div>
</div>
<?php

}
}
include("../Templategt/footer.php");

?>