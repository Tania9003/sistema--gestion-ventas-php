<?php 
include("../Templategt/template.php");
include("../Modelogt/empleado.php");
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Empleados</h6>
        <a href="Empleado.php?id=0" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i></span>
                                        <span class="text">Nuevo </span>
                                    </a>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                    <td>Código</td>
                    
                    <td>Cedula</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Sueldo</td>
                    <td>Acciones</td>
                    
                </tr>
               <?php
               $resu=getEmpleado();
               foreach($resu as $row){  ?>

                <tr>
                    <td><?php echo $row['emp_id']; ?> </td>
                    <td><?php echo $row['emp_cedula']; ?> </td>
                    <td><?php echo $row['emp_nombre']; ?> </td>
                    <td><?php echo $row['emp_apellido']; ?> </td>
                    <td><?php echo $row['emp_sueldo']; ?> </td>
                    
                    <td>
                        <a href="Empleado.php?id=<?php echo $row['emp_id'];?>" class="btn btn-secondary">Editar</a> 
                        <a href="../Controladorgt/clempleado.php?id=<?php echo $row['emp_id'];?>" class="btn btn-danger">Eliminar</a>
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