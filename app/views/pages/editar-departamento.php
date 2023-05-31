<?php require_once APP . '/views/inc/header-dash.php' ?>
<?php 
//DEVUELVE EL VALOR DE RETORNO DE LA TRANSSACCION
$estado = Seguridad::validarUrlInicio();

?>
<link rel="stylesheet" href="<?= URL .'/recursos/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'?>">
  <link rel="stylesheet" href="<?= URL .'/recursos/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'?>">
  <link rel="stylesheet" href="<?= URL .'recursos//plugins/datatables-buttons/css/buttons.bootstrap4.min.css'?>">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

           <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features
                <?php echo $resultado = $estado =="vacio" ? 'por favor llenar campos' : ' '; ?>
              <?php echo $resultado = $estado =="exitoso" ? 'modificación exitoso' : ' '; ?>
              <?php echo $resultado = $estado =="incorrecto" ? 'No se registro' : ' ';  ?>          
              
                </h3>
                <!-- /.card-header -->

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre del departamento</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $enlace_modificar = "/mvc-php/views/editarDeapartamentoId";
                    $enlace_eliminar = "/mvc-php/controllers/eliminarDepartamento";
        
                    $i = 0;
                    while($i < count($valores) ){
                        echo "<tr>";
                        echo "<td>".$valores[$i][1]."</td>";
                        echo "<td><a href=".$enlace_modificar."/" .$valores[$i][0].">Modificar</a></td>";
                        echo "<td><a href=". $enlace_eliminar. "/".$valores[$i][0].">Eliminar</a></td>";
                        echo "</tr>";
                        $i++;
                        
                    }

                    ?>

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Nombre del departamento</th>
                  <td>Modificar</td>
                    <td>Eliminar</td>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</section>
 <?php require_once APP . '/views/inc/footer-dash.php' ?>

<script src="<?= URL .'/recursos/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?= URL .'/recursos/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'?>"></script>
<script src="<?= URL .'/recursos/plugins/datatables-responsive/js/dataTables.responsive.min.js'?>"></script>
<script src="<?= URL .'/recursos/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'?>"></script>
<script src="<?= URL .'/recursos/plugins/datatables-buttons/js/dataTables.buttons.min.js'?>"></script>
<script src="<?= URL .'/recursos/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'?>"></script>
<script src="<?= URL .'/recursos/plugins/jszip/jszip.min.js'?>"></script>
<script src="<?= URL .'/recursos/plugins/pdfmake/pdfmake.min.js'?>"></script>
<script src="<?= URL .'/recursos/plugins/pdfmake/vfs_fonts.js'?>"></script>
<script src="<?= URL .'/recursos/plugins/datatables-buttons/js/buttons.html5.min.js'?>"></script>
<script src="<?= URL .'/recursos/plugins/datatables-buttons/js/buttons.print.min.js'?>"></script>
<script src="<?= URL .'/recursos/plugins/datatables-buttons/js/buttons.colVis.min.js'?>"></script>
<!-- AdminLTE App -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>