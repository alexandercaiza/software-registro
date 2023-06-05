
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
              <h2 class="text-center bg-success">  
              <?php echo $resultado = $estado =="vacio" ? 'por favor llenar campos' : ' '; ?>
              <?php echo $resultado = $estado =="exitoso" ? 'Registro exitoso' : ' '; ?>
              <?php echo $resultado = $estado =="incorrecto" ? 'No se registro' : ' '; ?>
              </h2>
              <div class="card-header">
                <h3 class="card-title">Ingreso Persona</h3>
               
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action =<?php echo "/mvc-php/controllers/ingresarPersona" ?> method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nombre" name="nombre">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Apellido</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="apellido" name="apellido">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Dni</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="dni" name="dni">
                   
                  </div>
                  <div class="form-group">
                  <label for="exampleSelectBorder">Departamento</label>
                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="departamento">
                    <option value="2">contabilidad</option>
                    <option value ="7">recepcion</option>
                    <option value ="9">gerencia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectBorder">Usuario</label>
                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="usuario">
                    <option value ="7">administrador</option>
                    <option value ="8">asistente</option>
                  </select>
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