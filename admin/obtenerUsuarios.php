
<?php

    $conexion = mysqli_connect('localhost', 'root','','WEB_DBA');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="text/javascript" href="js/index.js">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>


  <nav id="navbar" class="push better-nav fixed-top">
    <div class="container">
      <div class="head">
        <a href="#" class="brand">
          <div class="logo">
            <img class="image" src="img/logoescom.png" alt="logo" />
          </div>
          <div class="title">
            <h3>ESCOM</h3>
          </div>
        </a>
      </div>
      <div class="body">
        <ul>
          <li class="page"><a href="#">Estado de Alumnos</a></li>
          <li class="page"><a href="PHP/graficas.php">Graficas</a></li>
          <li class="page"><a href="materiasCRUD.php">Materias</a></li>
          <li class="blog dropdown"><a>Admin</a>
            <span class="selector"></span>
            <ul>
              <li><a href="#" data-toggle="modal" data-target="#modelMP">Mensaje general</a></li>
                <li><a href="#" data-toggle="modal" data-target="#modelMP2">Mensaje privado</a>
                </li>
                <li><a href="#">Salir</a></li>
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

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="text-center">Mensaje General</h3>
  </div>
  <div class="container-md">
      <div class="panel panel-body">
      <?php
            $sqlMess = "SELECT `mensaje_publico` FROM `mensaje_publico` WHERE `idmensaje_publico`=1";
            $resultadoMess=mysqli_query($conexion,$sqlMess);
            $mostrarMess = mysqli_fetch_array($resultadoMess);
            echo $mostrarMess['mensaje_publico'];
      ?>
      </div>
  </div>
</div>
<br>
<br>
<br>
<div class="container-lg">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#createUser">Añadir registro</button>
</div>
<div >
<div class="container-lg" id="recarga"> 
  <br>
</div>   

<div class="container">
        
        <!-- Modal Update a usuarios -->
        <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Configurar datos Usuario</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group">
                      <label for="id_Boleta">Boleta</label>
                      <input  type="text" id="update_idBoleta" value=""  class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label for="Correo Alumno">Correo</label>
                      <input type="text" id="update_correoAlumno" value=""   class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" id="update_passwordAlumno" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                      <label for="Usuario Alumno">Usuario</label>
                      <input type="text" id="update_userAlumno" class="form-control" value=""/> 
                    </div>        
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()">Save</button>
              </div>
            </div>
          </div>
        </div>

</div>

<div class="container">
        
        <!-- Modal Update a usuarios -->
        <div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Configurar datos Usuario</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group">
                      <label for="id_Boleta">Boleta</label>
                      <input  type="text" id="add_idBoleta" value=""  class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label for="Correo Alumno">Correo</label>
                      <input type="text" id="add_correoAlumno" value=""   class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" id="add_passwordAlumno" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                      <label for="Usuario Alumno">Usuario</label>
                      <input type="text" id="add_userAlumno" class="form-control" value=""/> 
                    </div>        
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Save</button>
              </div>
            </div>
          </div>
        </div>

</div>

<div class="container">
        
        <!-- Modal Delete a usuarios -->
        <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar Registro</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group">
                      <label for="id_Boleta">Boleta</label>
                      <input  type="text" id="delete_idBoleta" value=""  class="form-control"/>
                    </div>  
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" onclick="DeleteUser()">Save</button>
              </div>
            </div>
          </div>
        </div>

</div>
<div class="container" id=MessagePublic1>
        
        <!-- Modal Delete a usuarios -->
        <div class="modal fade" id="modelMP" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mensaje Público</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group">
                      <label for="mensajeP">Escribe aqui el mensaje público</label>
                      <textarea class="form-control" rows="3" id=add_mensajeP value=""></textarea>
                    </div>  
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" onclick="MessagePublic()">Save</button>
              </div>
            </div>
          </div>
        </div>

</div>
<div class="container" id=MessagePrivate>
        
        <!-- Modal Delete a usuarios -->
        <div class="modal fade" id="modelMP2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mensaje Privado</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group">
                      <label for="id_Boleta">Boleta a quien va dirigido</label>
                      <input  type="text" id="msg_idBoleta" value=""  class="form-control"/>
                    </div>  
                    <div class="form-group">
                      <label for="mensajeP">Escribe aqui el mensaje privado</label>
                      <textarea class="form-control" rows="3" id=add_mensajePP value=""></textarea>
                    </div>  
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" onclick="MessagePrivate()">Save</button>
              </div>
            </div>
          </div>
        </div>

</div>
               

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/transaction.js"></script>   
</body>
</html>