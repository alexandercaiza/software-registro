<?php require_once APP . '/views/inc/header.php' ?>
<?php require_once APP . '/lib/Seguridad.php' ?>

<?php 
$estado = Seguridad::validarUrlInicio();
?>

<div class="login-box">
  <div class="login-logo">
    <?php echo $resultado = $estado =="vacio" ? 'por favor llenar campos' : ' '; ?>
    <a href="/"><b>Registro</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
     

      <form action=<?php echo "/mvc-php/views/dashboard" ?> method="post">
        <div class="input-group mb-3">
          <input type="number" class="form-control" name="cedula" placeholder="Cédula">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="contrasena" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>


<?php require_once APP . '/views/inc/footer.php' ?>