<?php
  session_start();
  include('header.php'); //session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie
  //include_once "conexion.php"; //es la sentencia que usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.	  //
  /*Función verificar_login() --> Vamos a crear una función llamada verificar_login, esta se encargara de hacer una consulta a la base de datos para saber si el usuario ingresado es correcto o no.*/
  include('loginForm.php');

function verificar_login($usuario, $contrasena){
  include('conexion.php');
  $sql = "SELECT correo, password FROM usuarios";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
      if (($usuario == $row['correo']) AND ($contrasena == $row['password']))
      {
        return 1;
      }
    }

mysqli_close($mysqli);
    return 0;
}


function insertaruser($usuario, $contrasena, $publicidad)
{
  include('conexion.php');
  $sql = "INSERT INTO usuarios VALUES ('$usuario','$contrasena','$publicidad')";
  if ($stmt = mysqli_prepare($mysqli, $sql)) {
    mysqli_stmt_execute($stmt);
    $error_sql = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
  }
  mysqli_close($mysqli);
}


/*Luego haremos una serie de condicionales que identificaran el momento en el boton de login es presionado y cuando este sea presionado llamaremos a la función verificar_login() pasandole los parámetros ingresados:*/

if(!isset($_SESSION['userid'])) //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
{
    if(isset($_POST['loginbutton'])) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
    {
        if(verificar_login($_POST['username'],$_POST['password']) == 1) //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.
        {
            /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/
            $_SESSION['userid'] = $_POST['username'];
            $_SESSION['estado'] = 'Autenticado';
            echo '<div class="alert alert-success">
            <strong>Success!</strong> You logged in.
            </div>';
        }
        else
        {
            echo '<div class="alert alert-warning alert-dismissable" id="alert">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Error!</strong>  User Doesn´t Exist.
            </div>';
        }
    }
    if(isset($_POST['registerbutton'])) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
    {
        $Email=$_POST['email'];
        $Pwd= $_POST['passwd'];
        $News=$_POST['news'];

        if ($News== 1)
        {
          insertarUser($Email,$Pwd,'Si');
        }
        else {
          insertarUser($Email,$Pwd,'No');
        }
    }
  } else {
    // Si la variable de sesión ‘userid’ ya existe, que muestre el mensaje de saludo.
    echo '<div class="alert alert-success">
    <strong>Success!</strong> You are already logged in.
    </div>
    <a href="Logout.php">Logout</a>';
  }

 include('footer.php');?>
