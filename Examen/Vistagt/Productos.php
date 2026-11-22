<?php 
include("../Templategt/template.php");
include("../Modelogt/producto.php");
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
        <a href="Producto.php?id=0" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i></span>
                                        <span class="text">Nuevo Producto </span>
                                    </a>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                    <td>ID</td>
                    
                    <td>Codigo</td>
                    <td>Nombre</td>
                    <td>Precio</td>
                    <td>Stock</td>
                    
                </tr>
               <?php
               $resu=getProducto();
               foreach($resu as $row){  
            //debe coincidir con el nombre exacto dentro de la tabla en la BD
            ?>
                <tr>
                    <td><?php echo $row['pro_id']; ?> </td>
                    <td><?php echo $row['pro_codigo']; ?> </td>
                    <td><?php echo $row['pro_nombre']; ?> </td>
                    <td><?php echo $row['pro_precio']; ?> </td>
                    <td><?php echo $row['pro_stock']; ?> </td>
                    
                    <td>
                        <a href="Producto.php?id=<?php echo $row['pro_id'];?>" class="btn btn-secondary">Editar</a> 
                        <a href="../Controladorgt/clproducto.php?id=<?php echo $row['pro_id'];?>" class="btn btn-danger">Eliminar</a>
                    </td>
                    
                    
                </tr>

              <?php }  
              ?>
            </table>
        </div>
    </div>


</div>
<?php 
include("../Templategt/footer.php");

?>