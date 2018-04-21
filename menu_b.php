<style>

    .navbar-header {
            background: rgb(2, 0, 146);
        }

        nav.navbar.navbar-default {
            background: rgb(2, 0, 146);
            height:15%;
        }

        div#bs-example-navbar-collapse-1 {
            margin-top:2%;
            font-size: 20px;
    
        }

        div#bs-example-navbar-collapse-1 a{
       padding; 15%;
        color:#fff;
    
        }

        div#bs-example-navbar-collapse-1 li:hover{
        background:#005a92;
    
        }

        div#logo img {
          width:50%;
          border: px solid #fff;
          border-radius: 5px;
          background:#fff;
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

<nav class="navbar navbar-default navbar-fixed-top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header"id ="logo" >
      <a class="navbar-brand" href="#">
        <img alt="" src="img/logo1.png">
      </a>
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
        <li><a href="#">SERVICIOS</a></li>
        <li><a href="#">TRANSPARENCIA</a></li>
        <li><a href="#">LLAMADO A CONCURSOS</a></li>
        <li><a href="#">NOTICIAS</a></li>
        <li><a href="#">CONTACTENOS</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
 
</nav>