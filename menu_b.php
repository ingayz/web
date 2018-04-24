<style>

    .navbar-header {
        margin-top:10px;
        background: rgb(2, 0, 146);
        }

        nav.navbar.navbar-default {
            background: rgb(2, 0, 146);
            
        }

        div#bs-example-navbar-collapse-1 {
            font-size: 16px;
    
        }

        div#bs-example-navbar-collapse-1 a{
        color:#fff;
    
        }

        div#bs-example-navbar-collapse-1 li:hover{
        background:#005a92;
    
        }

        .navbar-nav>li>.dropdown-menu {
            margin-top: 0;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            background: #005a92;
        }

        .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>.dropdown-menu>.dropdown-togglea li a:hover{
          background:#87C141;/*Color del menu al ser seleccionado*/
        }

        div#bs-example-navbar-collapse-1 a:hover {
          color: #fff;
          background: #87C141;/*Color de la barra del menu desplegable*/
        }

</style>

<nav class="navbar navbar-default ">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header"id ="logo" >
      <a class="navbar-brand" href="#">
        
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">INICIO <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ALCALDÍA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="alcaldia.php">Misión</a></li>
            <li><a href="alcaldia.php#vision">Visión</a></li>
            <li><a href="alcaldia.php#valores">Valores</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="alcaldia.php#organigrama">Organigrama</a></li>
          </ul>
        </li>
        <li><a href="servicios.php">SERVICIOS</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRANSPARENCIA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="transparencia.php#ordenanzas">Ordenanzas</a></li>
            <li><a href="transparencia.php#distribucion institucional">Distribución Institucional</a></li>
            <li><a href="transparencia.php#plan operativo">Plan Operativo</P></li>
            <li><a href="transparencia.php#memoria y cuenta">Memoria y Cuenta</a></li>
            <li><a href="transparencia.php#ejecucion presupuestaria">Ejecucion Presupuestaria</a></li>
            <li><a href="transparencia.php#fondo de compensacion internacional">Fondo de Compensacion Internacional</a></li>
            <li><a href="transparencia.php#presupuesto participativo">Presupuesto Participativo</a></li>
            <li><a href="transparencia.php#presupuesto ciudadano">Presupuesto Ciudadano</a></li>
            <li><a href="transparencia.php#contrataciones publicas">Contrataciones Públicas</a></li>
        </ul>
        </li>
        <li><a href="#">LLAMADO A CONCURSOS</a></li>
        <li><a href="#">NOTICIAS</a></li>
        <li><a href="#">CONTACTENOS</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
 
</nav>