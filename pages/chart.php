<?php
// session_start();
            
// if($_SESSION['acceso']==5){
//     include "../php/conectar.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0"
    />
    <link rel="icon" href="../assets/logo/logo-negro.png" type="logo" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/utilities.css" />
    <link rel="stylesheet" type="text/css" href="../css/medias.css" />
    <link rel="stylesheet" type="text/css" href="../css/aos.css" />
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/icomoon/icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script> 
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script> -->
    <title>Chart - Soft WS TRADING</title>
  </head>
  <body id="home">
    <header>
      <div class="navbarr">
        <div class="logo2">
            <img class="visible" src="../assets/logo/logo-blanco.png" alt="LogoOW">
            <h1>WS TRADING</h1>
        </div>

        <div class="menu-toggle" style="margin-left: 10%;">
          <i class="fas fa-bars"></i>
        </div>

        <nav class="nav-links2">
          <div>
            <a href="homeSoft.php" style="padding: 15px;">Home</a>
          </div>
          <div>
            <a href="chart.php" style="padding: 15px;">Chart</a>
          </div>
          <div class="dropdown links-nav">
            <a href="#" style="padding: 15px;">Dashboard</a>
            <ul class="links-nav-list dash">
              <a href="https://wa.me/+5493416744997"><li><i style="margin-right: 10px;" class="fa-brands fa-whatsapp"></i>Whatsapp</li></a>
              <a href="mailto:pozzilucianomartin@gmail.com"><li><i style="margin-right: 10px;" class="fa-solid fa-envelope"></i>Correo</li></a>
            </ul>
          </div>
          <div class="dropdown links-nav">
            <a href="#" style="padding: 15px;">Manage</a>
            <ul class="links-nav-list manage">
              <a href="https://wa.me/+5493416744997"><li><i style="margin-right: 10px;" class="fa-brands fa-whatsapp"></i>Whatsapp</li></a>
              <a href="mailto:pozzilucianomartin@gmail.com"><li><i style="margin-right: 10px;" class="fa-solid fa-envelope"></i>Correo</li></a>
            </ul>
          </div>
          <div class="dropdown links-nav">
            <a href="#" style="padding: 15px;">Help</a>
            <ul class="links-nav-list help">
              <a href="https://wa.me/+5493416744997"><li><i style="margin-right: 10px;" class="fa-brands fa-whatsapp"></i>Whatsapp</li></a>
              <a href="mailto:pozzilucianomartin@gmail.com"><li><i style="margin-right: 10px;" class="fa-solid fa-envelope"></i>Correo</li></a>
            </ul>
          </div>
          <div class="dropdown links-nav">
            <a href="#" style="padding: 15px;">About Us</a>
            <ul class="links-nav-list about-Us">
              <a href="https://wa.me/+5493416744997"><li><i style="margin-right: 10px;" class="fa-brands fa-whatsapp"></i>Whatsapp</li></a>
              <a href="mailto:pozzilucianomartin@gmail.com"><li><i style="margin-right: 10px;" class="fa-solid fa-envelope"></i>Correo</li></a>
            </ul>
          </div>
        </nav>

        <div class="content-userr">
          <div class="dropdown links-nav">
            <a href="#" style="padding: 15px;"><i class="fa-solid fa-user"></i><span style="margin-left: 10px;">Daniel Marelli</span></a>
            <ul class="links-nav-list userr">
              <a href="#"><li><i style="margin-right: 10px;" class="fa-brands fa-whatsapp"></i>Mis Datos</li></a>
              <a href="../index.php"><li><i style="margin-right: 10px;" class="fa-brands fa-whatsapp"></i>Cerrar Sesión</li></a>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <div class="scroll-navv">
      <a href="#">Market Summary</a>
      <a href="#">US Stocks</a>
      <a href="#">Crypto</a>
      <a href="#">Futures</a>
      <a href="#">Forex</a>
      <a href="#">Economy</a>
      <a href="#">Brokers</a>
    </div>

    <div class="popup-login" id="login-popup">
      <div class="popup-login-content">
          <span class="close-popup-login">&times;</span>
          <h2 class="visible">Iniciar Sesión</h2>
          <div class="login-form">
            <div class="login-user">
              <label for="user"></label>
              <input type="text" id="user" placeholder="Usuario">
            </div>
            <div class="login-password">
              <label for="password"></label>
              <input type="password" id="password" placeholder="Contraseña">
            </div>
            <button id="loginMobile" class="btn-login">Ingresar</button>
          </div>
      </div>
    </div>
    
    <main style="height: 900vh; background-color: #000000;">
      <!-- <section id="heroHome" class="#">
        <article class="hero-index">
          <div class="img-index">
            <img src="assets/img/Web-OW.jpg" alt="">
          </div>
          <div class="register-form">
            <div class="tittles-index">
              <h2>La plataforma de trading definitiva para la bolsa de New York y los mercados mundiales.</h2>
            </div>
            <div class="content-name">
              <div class="#">
                <input type="text" id="name" placeholder="Nombre">
              </div>
              <div class="#">
                <input type="text" id="lastname" placeholder="Apellido">
              </div>
            </div>
            <div class="email-register">
              <input type="email" id="email" placeholder="Email">
            </div>
            <button class="btn-register">Registrarse</button>
          </div>
        </article>
      </section> -->

      
    </main>

    <div id="whatsapp" class="btnWsp">
      <a href="https://wa.me/+5493416744997" class="btn-wsp" target="_blank">
        <img
          src="../assets/icons/whatsapp.png"
          style="width: 3rem"
          alt="logowsp"
        />
      </a>
    </div>

    <!-- Footer -->

    <footer class="footerr">
      <div class="footer-row">
        <div class="col-sm copyright">
          <p class="copyright">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Todos los derechos reservados | <a href="https://mgsolutions.com.ar" target="_blank"><b>MG Solutions</b></a>
          </p>
        </div>
        <div class="col-md-3 social-med">
          <h3>Síganos</h3>
          <ul class="list-unstyled sociall">
            <li>
              <a href="https://www.facebook.com/profile.php?id=61571387507083" target="_blank"
                ><span><i class="fab fa-facebook-f"></i></span
              ></a>
            </li>
            <li>
              <a href="https://x.com/onewaywallst?t=HhOgkPdSKxx9BAPGOSNB2g&s=09" target="_blank"
                ><span><i class="fab fa-twitter"></i></span
              ></a>
            </li>
            <li>
              <a href="https://www.instagram.com/onewaywallstreet/" target="_blank"
                ><span><i class="fab fa-instagram"></i></span
              ></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/one-way-075553345/" target="_blank"
                ><span><i class="fab fa-linkedin-in"></i></span
              ></a>
            </li>
            <li>
              <a href="https://www.youtube.com/@LucianoPozziOW"
                ><span><i class="fab fa-youtube"></i></span
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    

    
    
    <script src="../js/jquery.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script type="text/javascript" src="../js/aos.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script>
      AOS.init();
    </script>
    <script type="text/javascript" src="../js/app.js"></script>
    <script type="module" src="script.js"></script>
  </body>
</html>
