<?php
  
  require_once("conexion.php");
  
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $query="SELECT *
      FROM usuarios
      WHERE email='$email' AND password='$pass'";
  $result=mysqli_query($link, $query);
  $numero_filas = mysqli_num_rows($result);
  if ($numero_filas==null){
  header("Location: login.php");
  echo'<p>El usuario o la contraseña son invalidos</p>';
  exit;
  } else {
    session_start();
    $_SESSION['user'] = $email;
    header("Location: perfil.php");
    }
    exit();
    echo'<p class="puser">Bienvenido/a '.$email.'</p>';

?>