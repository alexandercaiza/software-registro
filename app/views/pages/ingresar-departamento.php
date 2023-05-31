<?php require_once APP . '/views/inc/header-dash.php' ?>
<?php 
$estado = Seguridad::validarUrlInicio();
?>

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
              <!-- /.card-header -->
              <?php echo $resultado = $estado =="vacio" ? 'por favor llenar campos' : ' '; ?>
              <?php echo $resultado = $estado =="exitoso" ? 'Registro exitoso' : ' '; ?>
              <?php echo $resultado = $estado =="incorrecto" ? 'No se registro' : ' '; ?>
              <!-- form start -->
              <form action=<?php echo "/mvc-php/controllers/departamento/ingreso" ?> method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNombre">Nombre</label>
                    <input type="text" class="form-control" id="nombreDepartamento" name="nombreDepartamento" placeholder="Nombre del departamento">
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