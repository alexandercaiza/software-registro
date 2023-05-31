<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href=<?php echo "/mvc-php/views/dashboard" ?>  class="brand-link">
      <img src="<?= URL .'/recursos/dist/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Registro</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
      </div>

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Personal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=<?php echo "/mvc-php/views/ingresarPersona" ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ingresar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo "/mvc-php/views/editarPersona" ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modificar o eliminar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo "/mvc-php/views/editarContrasena" ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cambio de contraseña</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Departamento
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=<?php echo "/mvc-php/views/ingresarDepartamento" ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ingresar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo "/mvc-php/views/editarDepartamento" ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modificar o eliminaar</p>
                </a>
              </li>
        
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Usuario
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=<?php echo "/mvc-php/views/ingresarUsuario" ?>  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ingresar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo "/mvc-php/views/editarUsuario" ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modificar o eliminar</p>
                </a>
              </li>
            </ul>
          </li>
          
         
          
   
        
         
         
      
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>