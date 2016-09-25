<?php
  session_start();
  include('header.php'); //session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie
  //include_once "conexion.php"; //es la sentencia que usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.	  //
  /*Función verificar_login() --> Vamos a crear una función llamada verificar_login, esta se encargara de hacer una consulta a la base de datos para saber si el usuario ingresado es correcto o no.*/


function verificar_login($usuario, $contrasena){
  include('conexion.php');
  $sql = "SELECT correo, password FROM usuario";
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

  $sql = "SELECT correo FROM usuario";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
      if (($usuario == $row['correo']))
      {
        return 0;
      }
    }


  $codigoverificacion = rand(000000000,999999999);
    $sql = "INSERT INTO usuario (correo,password,publicidad,code) VALUES ('$usuario','$contrasena','$publicidad',$codigoverificacion)";
    if ($stmt = mysqli_prepare($mysqli, $sql)) {
      mysqli_stmt_execute($stmt);
      $error_sql = mysqli_stmt_error($stmt);
      mysqli_stmt_close($stmt);
    }
  mysqli_close($mysqli);
  return 1;
// Varios destinatarios
/*$para  = $usuario; // atención a la coma
// título
$título = 'Trendloft Account Confirmation';
// mensaje
$mensaje = '
<html>
<head>
<title>Email Confirmation</title>
</head>
<body>
<h1>Thanks for suscribing to Trendloft!</h1>
<h3>Click the link below to confirm your email</h3>
<a href="www.Trendloft.com/verification.php?code="'.$$codigoverificacion.'></a>

</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To:'.$usuario. "\r\n";
$cabeceras .= 'From: Confirmation <noreturn@Trendloft.com>' . "\r\n";


// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
*/
}


/*Luego haremos una serie de condicionales que identificaran el momento en el boton de login es presionado y cuando este sea presionado llamaremos a la función verificar_login() pasandole los parámetros ingresados:*/

if(!isset($_SESSION['userid'])) //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
{
  include('loginForm.php');
    if(isset($_POST['loginbutton'])) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
    {
        if(verificar_login($_POST['username'],$_POST['password']) == 1) //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.
        {
            /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/
            $_SESSION['userid'] = $_POST['username'];
            $User= $_SESSION['userid'];
            $_SESSION['logueado'] = true;

            echo '<div class="alert alert-success">
            <strong>Success!</strong> You logged in as: '.$User.'
            </div>';
        }
        else
        {
            echo '<div class="alert alert-warning alert-dismissable" id="alert">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Error!</strong>  User Doesn´t Exist, maybe is something wrong with ur username or password. Please Check.
            </div>';
        }
    }
    if(isset($_POST['registerbutton'])) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
    {
        $Email=$_POST['email'];
        $Pwd= $_POST['passwd'];
        if (isset($_POST['news']))
        {
          $News=$_POST['news'];
          if(insertarUser($Email,$Pwd,'Si')== 1)
          {
            echo '<div class="alert alert-success">
            <strong>Success!</strong> You registered in as: '.$Email.' awaiting email confirmation
            </div>';
          }
          else{
            echo '<div class="alert alert-warning alert-dismissable" id="alert">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Error!</strong>  Wrong input.
            </div>';
          }

        }
        else {
          if(insertarUser($Email,$Pwd,'No')== 1)
          {
            echo '<div class="alert alert-success">
            <strong>Success!</strong> You registered in as: '.$Email.' awaiting email confirmation
            </div>';
          }
          else{
            echo '<div class="alert alert-warning alert-dismissable" id="alert">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Error!</strong>  Wrong input.
            </div>';
          }}

    }
  } else {
    // Si la variable de sesión ‘userid’ ya existe, que muestre el mensaje de saludo.
    $Usuario =   $_SESSION['userid'];
    echo '
    <div style="margin-top:30%;margin-left:40%; position: absolute;" class="">
      <div  class="alert alert-success container-fluid">
      <strong>Success!</strong> You are already logged in.
    </div>
    </div>'
    ;
  }

 include('footer.php');?>
