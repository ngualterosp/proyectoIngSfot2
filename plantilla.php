<!DOCTYPE html>
<html>
<title>Information Soccer League</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="login.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-unlock-alt w3-margin-right"></i>Login</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white fa fa-home"> Inicio</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white fa fa-group"> Estadisticas </a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white fa fa-globe"> Estadios</a>
  <!--<a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white 	fa fa-line-chart"> Clasificación</a>-->
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white fa fa-phone"> Contactos</a>
 </div>

  <!-- Navbar on small screenss -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button ">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="img/futbol.png" alt="boat" style="width:100%;min-height:780px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">
  </div>
</div>

<!-- Team Container -->
<?php
include('Administrador/panelAdmin/jugadorCliente.php');


 ?>


<!-- Work Row -->
<?php
        include('Administrador/panelAdmin/estadiosCliente.php');

?>
<!-- Pricing Row -->


<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contactenos</span></div>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Bogotá, Col</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i> +57 3102341392</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  soccerlegaue@gmail.com </p>
    </div>
    <div class="w3-col m7">
      <p><i class=""></i>  Envia tu comentario! </p>
      <div class="w3-section">
        <label>Nombre</label>
        <input required name="nombre" class="w3-input" type="text"placeholder="Nombre..."></p>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input" required type="text" name="Email" required placeholder="email...">
      </div>
      <div class="w3-section">
        <label>Mensaje</label>
        <input class="w3-input" required type="text" name="Message" required placeholder="mensaje...">
      </div>

      <button type="submit" class="w3-button w3-right w3-theme">Enviar</button>
    </div>
  </div>
</div>



<!-- Image of location/map -->
<img src="img/champions.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Síguenos</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>


</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
