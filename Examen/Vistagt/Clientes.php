<?php 
include("../Templategt/template.php");
include("../Modelogt/cliente.php");
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
        <a href="Cliente.php?id=0" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i></span>
                                        <span class="text">Nuevo Cliente </span>
                                    </a>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                    <td>Código</td>
                    
                    <td>Documento</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Telefono</td>
                    <td>Direccion</td>
                    <td>Acciones</td>
                    
                </tr>
               <?php
               $resu=getCliente();
               foreach($resu as $row){  
            //debe coincidir con el nombre exacto dentro de la tabla en la BD
            ?>
                <tr>
                    <td><?php echo $row['cli_id']; ?> </td>
                    <td><?php echo $row['cli_identificacion']; ?> </td>
                    <td><?php echo $row['cli_nombre']; ?> </td>
                    <td><?php echo $row['cli_apellido']; ?> </td>
                    <td><?php echo $row['cli_telefono']; ?> </td>
                    <td><?php echo $row['cli_direccion']; ?> </td>
                    
                    <td>
                        <a href="Cliente.php?id=<?php echo $row['cli_id'];?>" class="btn btn-secondary">Editar</a> 
                        <a href="../Controladorgt/clempleado.php?id=<?php echo $row['cli_id'];?>" class="btn btn-danger">Eliminar</a>
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