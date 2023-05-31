<?php require_once APP . '/views/inc/header-dash.php' ?>
<?php require_once APP . './models/DAO-departamento.php' ?>
<?php 
//DEVUELVE EL VALOR DE RETORNO DE LA TRANSSACCION
$estado = Seguridad::validarUrlInicio();

$DaoDepartamento = new DAOdepartamento() ; 
$nombre_departamento = $DaoDepartamento -> traerDepartamento($id);

?>;

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ingreso Departamento</h3>
              </div>
              
             
              <!-- form start -->
              <form action=<?php echo "/mvc-php/controllers/editardepartamento" ?> method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNombre">Nombre</label>
                    <input type="text" value = "<?php echo $nombre_departamento?>" class="form-control" id="nombreDepartamento" name="nombreDepartamento" placeholder="nombre del departamento">
                    <input type="hidden" value= "<?php echo $id; ?>" name ="id">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
            </div>
            </div>
</section>



<?php require_once APP . '/views/inc/footer-dash.php' ?>