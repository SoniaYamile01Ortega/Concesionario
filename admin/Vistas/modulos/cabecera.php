<header class="main-header">

    <!-- Logo -->
    <a href="http://localhost/Concesionario/admin/Inicio" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b class="fa fa-car" style="font-size: 25px"></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Concesionaria</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

          
              <?php

              if($_SESSION["foto"] == ""){

                echo '<img src="http://localhost/Concesionario/admin/Vistas/img/defecto.png" class="user-image" alt="User Image">';

              }else{

                 echo '<img src="http://localhost/Concesionario/admin/'.$_SESSION["foto"].'" class="user-image" alt="User Image">';

              }

              echo '<span class="hidden-xs">'.$_SESSION["apellido"].' '.$_SESSION["nombre"].'</span>';

              ?>
              
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="height: 100px;">
                
                <?php

                  echo '<p>
                         '.$_SESSION["apellido"].'" " '.$_SESSION["nombre"].'" - "'.$_SESSION["rol"].'
                        </p>';

                ?>

                
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="http://localhost/Concesionario/admin/Mis-Datos" class="btn btn-primary btn-flat">Mis-Datos</a>
                </div>
                <div class="pull-right">
                  <a href="http://localhost/Concesionario/admin/Salir" class="btn btn-danger btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>

    </nav>
  </header>