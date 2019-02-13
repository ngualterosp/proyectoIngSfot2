<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body background="img/champions.jpg" >

  <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input name="user" type="text" id="usuario" class="form-control" placeholder="Usuario" required="required" >
                <label for="usuario">Usuario</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input name="password" type="password" id="clave" class="form-control" placeholder="Contraseña" required="required">
                <label for="clave">Contraseña</label>
              </div>
            </div>
          <a class="btn btn-primary btn-block" href="index.html">Login</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

<?php

    session_start();





    function verificar_login($user,$password,&$result)  // COMPARAMOS SI EXISTE EL RESULTADO
    {

    	$conn = mysqli_connect("localhost","root", "", "badbunny");
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

        $sql = "SELECT * FROM administrador WHERE usuario_admin='$user' and pass_admin='$password'";



		$rec = $conn->query($sql);
        $count = 0;
        while($row = $rec->fetch_assoc())
        {
            $count++;
            $result = $row;
        }
        if($count == 1)
        {

            $_SESSION['cod_admin'] = $row['cod_admin'];
            return 1;
        }
        else
        {
            return 0;
        }
    }




    if(!isset($_SESSION['cod_admin']))
    {
        if(isset($_POST['login']))
        {
          if(empty($_POST['user'])) {
            echo "<p class='error'> * El campo usuario no puede estar vacío </p>";
          }
            if(empty($_POST['password'])) {
            echo "<div class='error'> * El campo constraseña no puede estar vacío </div>";
              }
            if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
            {
                $_SESSION['cod_admin'] = $result->cod_admin;


                   header("location:inicioAdmin.php"); // Acá es el login correcto, y reenviamos
            }
            else
            {
                echo '<span class="error">Usuario o contraseña incorrecto, intente de nuevo.</span>'; // mensaje de error
            }
        }

        ?>

<?php
      }
      else
      {
          echo 'Su usuario ingreso correctamente.';
          echo '<a href="logout.php">Logout</a>';
      }
      // eso es logout cunado cerramos sesion vemos como es codigo
    ?>

    <style>
    body{
    background: url(img/champions.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    </style>
