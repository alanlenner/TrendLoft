<?php
  include('header.php');
  session_start(); //session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie
  //include_once "conexion.php"; //es la sentencia que usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.	  //
  /*Función verificar_login() --> Vamos a crear una función llamada verificar_login, esta se encargara de hacer una consulta a la base de datos para saber si el usuario ingresado es correcto o no.*/
  include('loginForm.php');

function verificar_login($user,$password,&$result)
    {

        $sql = "SELECT * From usuarios";
        $res = mysql_query($sql, $link);

        while ($row = mysql_fetch_array($res)) {
         $correo = $row["correo"];
         $pass = $row["password"];

        if ($pass == $password && $user == $correo)
        {
            return 1;
        }
        else
        {
            return 0;
        }
          }
    }

/*Luego haremos una serie de condicionales que identificaran el momento en el boton de login es presionado y cuando este sea presionado llamaremos a la función verificar_login() pasandole los parámetros ingresados:*/

if(!isset($_SESSION['userid'])) //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
{
    if(isset($_POST['login'])) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
    {
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.
        {
            /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/
            $_SESSION['userid'] = $result->idusuario;
            header("location:index.php");
        }
        else
        {
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; //Si la función verificar_login() no pasa, que se muestre un mensaje de error.
        }
    }
} else {
    // Si la variable de sesión ‘userid’ ya existe, que muestre el mensaje de saludo.
    echo 'Su usuario ingreso correctamente.';
    echo '<a href="logout.php">Logout</a>';
}
?>
<?php include('footer.php');?>
