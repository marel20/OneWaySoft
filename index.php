<?php
// session_start();
            
// $_SESSION['acceso']=0;

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
    <link rel="icon" href="assets/logo/logo-negro.png" type="logo" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/utilities.css" />
    <link rel="stylesheet" type="text/css" href="css/medias.css" />
    <link rel="stylesheet" type="text/css" href="css/aos.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icomoon/icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script> 
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script> -->
    <title>One Way Wall Street</title>
  </head>
  <body id="home">
    <header>
      <div class="navbarr">
        <div class="logo">
            <img src="assets/logo/logo-blanco.png" alt="LogoOW">
            <h1 class="visible">WS TRADING</h1>
        </div>

        <div class="login-btn-content hidden">
          <button id="popupLogin" class="btn-login">Iniciar Sesión</button>
        </div>


        <div class="menu-toggle" style="margin-left: 10%;">
          <i class="fas fa-bars"></i>
        </div>

        <nav class="nav-links">
          <div>
            <a href="#" style="padding: 15px;">Ayuda</a>
            <a href="#" style="padding: 15px;">Sobre Nosotros</a>
            <div class="dropdown contact-nav">
              <a href="#" style="padding: 15px;">Contacto</a>
              <ul class="contact-nav-list">
                <a href="https://wa.me/+5493416744997"><li><i style="margin-right: 10px;" class="fa-brands fa-whatsapp"></i>Whatsapp</li></a>
                <a href="mailto:pozzilucianomartin@gmail.com"><li><i style="margin-right: 10px;" class="fa-solid fa-envelope"></i>Correo</li></a>
              </ul>
            </div>
          </div>
        </nav>

        <div class="login-form visible">
          <div class="login-user">
            <input type="text" id="user" placeholder="Usuario">
          </div>
          <div class="login-password">
            <input type="password" id="password" placeholder="Contraseña">
          </div>
          <button id="loginPC" class="btn-login">Ingresar</button>
        </div>
      </div>
    </header>


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
    
    <main>
      <section id="heroHome" class="#">
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
                <!-- <label for="name"></label> -->
                <input type="text" id="name" placeholder="Nombre">
              </div>
              <div class="#">
                <!-- <label for="lastname"></label> -->
                <input type="text" id="lastname" placeholder="Apellido">
              </div>
            </div>
            <div class="email-register">
              <!-- <label for="email"></label> -->
              <input type="email" id="email" placeholder="Email">
            </div>
            <button class="btn-register">Registrarse</button>
          </div>
        </article>
      </section>

      
    </main>

    <div id="whatsapp" class="btnWsp">
      <a href="https://wa.me/+5493416744997" class="btn-wsp" target="_blank">
        <img
          src="assets/icons/whatsapp.png"
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
    

    
    
    <script src="js/jquery.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script type="text/javascript" src="js/aos.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script>
      AOS.init();
    </script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="module" src="script.js"></script>
  </body>
</html>
