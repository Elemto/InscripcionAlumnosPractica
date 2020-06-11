
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Graficos </title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/navBar.css">
  <link rel="js" href="../js/index.js">
  <link rel="stylesheet" type="text/css" href="../graficas/librerias/bootstrap/css/bootstrap.css">
  <script src="../graficas/librerias/jquery-3.5.1.min.js"></script>
  <script src="../graficas/librerias/plotly-latest.min.js"></script>
  
</head>
<body>


<nav id="navbar" class="push better-nav fixed-top">
<div class="container">
  <div class="head">
    <a href="#" class="brand">
      <div class="logo">
        <img class="image" src="../img/logoescom.png" alt="logo" />
      </div>
      <div class="title">
        <h3>ESCOM</h3>
      </div>
    </a>
  </div>
  <div class="body">
    <ul>
      <li class="page"><a href="../obtenerUsuarios.php">Estado de Alumnos</a></li>
      <li class="blog active dropdown"><a href="#">Admin</a>
        <span class="selector"></span>
        <ul>
        <li><a href="#">Mensaje general</a></li>
          <li><a href="#">Salir</a></li>
          <li><a href="#">Mensaje privado</a></li>
        </ul>
      </li>   
      <li class="more dropdown"><a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
        <span class="selector"></span>
        <ul>
          <li><a href="#">RSS</a></li>
          <li class="search clearfix">
            <form>
              <input type="text" placeholder="Search" />
              <button><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="toggle">
    <a href="#navbar-slide">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </a>
  </div>
</div>
</nav>
<br>
<br>
<br>
<br>
<br>

<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
						<h5>La primera gráfica representa los usuarios totales logueados en el sistema con registro de materia.
            </h5> 
            <h5>La segunda representa el numero total de amterias seleccionadas por los usuarios. 
					  </h5>
          </div>
					<div class="panel panel-body">
						<div class="row">
							<div class="col-sm-6">
								<div id="cargaLineal"></div>
							</div>
							<div class="col-sm-6">
								<div id="cargaBarras"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>



</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal').load('lineal.php');
		$('#cargaBarras').load('barras.php');
	});
</script>