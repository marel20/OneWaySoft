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
    <title>Chart - Soft OW TRADING</title>
  </head>
  <body id="home">
  <!-- <header>
      <div class="navbarr">
        <div class="logo2">
            <img class="visible" src="../assets/logo/logo-blanco.png" alt="LogoOW">
            <h1>WS TRADING</h1>
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

        <div class="userr-lang">
          <div class="content-language">
            <div class="dropdown links-nav">
              <a href="#" style="padding: 15px;"><i class="fas fa-globe" data-tooltip="Idioma"></i></a>
              <ul class="links-nav-list language">
                <a href="#"><li data-lang="es">Español</li></a>
                <a href="#"><li data-lang="en">English</li></a>
                <a href="#"><li data-lang="fr">Français</li></a>
                <a href="#"><li data-lang="de">Deutsch</li></a>
                <a href="#"><li data-lang="it">Italiano</li></a>
              </ul>
            </div>
          </div>
          <div class="content-userr">
            <div class="dropdown links-nav">
              <a href="#" style="padding: 15px;"><i class="fa-solid fa-user"></i></a>
              <ul class="links-nav-list userr">
                <a href="#"><li class="no-hover"><img src="../assets/logo/logo-blanco.png" alt=""><span>Galo Francisco Comba Ramirez</span></li></a>
                <a href="#"><li><i style="margin-right: 10px;" class="fa-brands fa-whatsapp"></i>Mis Datos</li></a>
                <a href="../index.php"><li><i style="margin-right: 10px;" class="fa-brands fa-whatsapp"></i>Cerrar Sesión</li></a>
              </ul>
            </div>
          </div>
        </div>

        <div class="menu-toggle">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </header> -->

   
    <main>
      <section class="chart-page">
        <div class="nav-chart">
          <div class="content-nav-chart">
            <div class="chart-user">
              <div class="user-icon icon-with-tooltip" data-tooltip="Usuario">
                <i class="fas fa-user" ></i>
              </div>
              <div class="user-menu">
                <div class="user-header">
                  <h2>OW TRADING</h2>
                </div>
                <div class="line-border-bottom"></div>
                <div class="user-options">
                  <div class="menu-item submenu-item">
                    <div class="content-menu-item">
                      <div><i class="fas fa-globe"></i></div> 
                      <div><span>Galo Francisco Comba Ramirez</span></div>
                    </div>
                    <div class="content-menu-item">
                      <i class="fas fa-chevron-right submenu-arrow"></i>
                    </div>
                    <div class="submenu">
                      <div class="submenu-item"><a href="#">Take Free Trial</a></div>
                      <div class="submenu-item"><a href="#">Profile</a></div>
                      <div class="submenu-item"><a href="#">Profile Settings</a></div>
                      <div class="submenu-item"><a href="#">Account & Billing</a></div>
                      <div class="submenu-item"><a href="#">Refer a Friend</a></div>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="content-menu-item">
                      <div><i class="fas fa-home"></i></div>
                      <div><a href="#">Home</a></div>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="content-menu-item">
                      <div><i class="fas fa-question-circle"></i></div>
                      <div><a href="#">Help Center</a></div>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="content-menu-item">
                      <div><i class="fas fa-bell"></i></div>
                      <div><a href="#">What's new</a></div> 
                    </div>
                    <div class="content-menu-item">
                      <div><span class="badge">11</span></div>
                    </div>
                  </div>
                  <div class="line-border-bottom"></div>
                  <div class="menu-item submenu-item">
                    <div class="content-menu-item">
                      <div><i class="fas fa-globe"></i></div> 
                      <div><span>Language</span></div>
                    </div>
                    <div class="content-menu-item">
                      <div><span id="#" style="color: #747474c0;">English</span></div>
                      <div><i class="fas fa-chevron-right submenu-arrow"></i></div>
                    </div>
                    <div class="submenu">
                      <div class="submenu-item"><a href="#">English</a></div>
                      <div class="submenu-item"><a href="#">Español</a></div>
                      <div class="submenu-item"><a href="#">Français</a></div>
                      <div class="submenu-item"><a href="#">Italiano</a></div>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="content-menu-item">
                      <div><i class="fas fa-home"></i> </div>
                      <div><a href="#">Keyboard Shortcuts</a></div>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="content-menu-item">
                      <div><i class="fas fa-home"></i></div>
                      <div><a href="#">Get Desktop app</a></div>
                    </div>
                  </div>
                  <div class="line-border-bottom"></div>
                  <div class="menu-item">
                    <div class="content-menu-item">
                      <div><i class="fas fa-sign-out-alt"></i></div>
                      <div><a href="../index.php">Sign Out</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="searchChart" class="search-chart icon-with-tooltip" data-tooltip="Buscar">
              <div><span id="actionName">AAPL</span></div>
              <div><button id="btnSearchChart"><i class="fas fa-search"></i></button></div>
            </div>
            <div class="compare-chart icon-with-tooltip" data-tooltip="Compare or Add Symbol">
              <div>
                <button id="compareChart">
                  <i class="fa-solid fa-plus" ></i>
                </button>
              </div>
            </div>
            <div class="border-right"></div>
            <div class="time-chart dropdown-container-chart icon-with-tooltip" data-tooltip="1 Day">
              <div>
                <button class="nav-chart--button" data-target="popup-time"><span>D</span></button>
              </div>
              <div id="popup-time" class="dropdown-menu-chart">
                <button class="dropdown-item-chart">1wefwefweD</button>
                <button class="dropdown-item-chart">1wefewfW</button>
                <button class="dropdown-item-chart">1wefwefwefM</button>
                <button class="dropdown-item-chart">3wefwefewM</button>
                <button class="dropdown-item-chart">1wefwefewfY</button>
              </div>
            </div>
            <div class="border-right"></div>
            <div class="candles-chart dropdown-container-chart icon-with-tooltip" data-tooltip="Candles">
              <button class="nav-chart--button" data-target="popup-candles"><i class="fas fa-chart-column"></i></button>
              <div id="popup-candles" class="dropdown-menu-chart">
                <button class="dropdown-item-chart">candlees</button>
                <button class="dropdown-item-chart">candlees</button>
                <button class="dropdown-item-chart">candlees</button>
                <button class="dropdown-item-chart">candlees</button>
                <button class="dropdown-item-chart">candlees</button>
              </div>
            </div>
            <div class="border-right"></div>
            <div class="indicators-chart icon-with-tooltip" data-tooltip="Indicators, metrics, and strategies">
              <button id="indicatorsChart"><i class="fas fa-chart-line"></i></button>
            </div>
            <div class="indicators-template-chart dropdown-container-chart icon-with-tooltip" data-tooltip="Indicators Template">
              <button class="nav-chart--button" data-target="popup-template"><i class="fas fa-table-cells-large"></i></button>
              <div id="popup-template" class="dropdown-menu-chart">
                <button class="dropdown-item-chart">templatee</button>
                <button class="dropdown-item-chart">templatee</button>
                <button class="dropdown-item-chart">templatee</button>
                <button class="dropdown-item-chart">templatee</button>
                <button class="dropdown-item-chart">templatee</button>
              </div>
            </div>
            <div class="border-right"></div>
            <div class="create-alert-chart icon-with-tooltip" data-tooltip="Create Alert">
              <button id="createAlertChart"><i class="fas fa-stopwatch"></i></button>
            </div>
            <div class="bar-replay-chart icon-with-tooltip" data-tooltip="Replay">
              <button id="barReplayChart"><i class="fa-solid fa-backward"></i></button>
            </div>
            <div class="border-right"></div>
            <div class="back-go-chart">
              <button id="backChart" class="icon-with-tooltip" data-tooltip="Back"><i class="fas fa-reply"></i></button>
              <button id="goChart" class="icon-with-tooltip" data-tooltip="Front"><i class="fas fa-share"></i></button>
            </div>
          </div>
          <div class="content-nav2-chart">
            <div class="unnamed-chart dropdown-container-chart">
              <button class="nav-chart--button" data-target="popup-unnamed"><span>Unnamed</span><i class="fas fa-square-caret-down icon-unnamed"></i></button>
              <div id="popup-unnamed" class="dropdown-menu-chart">
                <button class="dropdown-item-chart">Unnamed</button>
                <button class="dropdown-item-chart">Unnamed</button>
                <button class="dropdown-item-chart">Unnamed</button>
                <button class="dropdown-item-chart">Unnamed</button>
                <button class="dropdown-item-chart">Unnamed</button>
              </div>
            </div>
            <div class="quick-search-chart icon-with-tooltip" data-tooltip="Quick Search">
              <button id="quickSearchChart"><i class="fab fa-searchengin"></i></button>
            </div>
            <div class="settings-chart icon-with-tooltip" data-tooltip="Settings">
              <button id="settingsChart"><i class="fas fa-gears"></i></button>
            </div>
            <div class="fullscreen-mode-chart icon-with-tooltip" data-tooltip="Fullscreen Mode">
              <button id="fullscreenModeChart"><i class="fas fa-expand"></i></button>
            </div>
            <div class="snapshot-chart dropdown-container-chart icon-with-tooltip" data-tooltip="Snapshot">
              <button class="nav-chart--button" data-target="popup-snapshot"><i class="fas fa-camera"></i></button>
              <div id="popup-snapshot" class="dropdown-menu-chart">
                <button class="dropdown-item-chart">captureee</button>
                <button class="dropdown-item-chart">captureee</button>
                <button class="dropdown-item-chart">captureee</button>
                <button class="dropdown-item-chart">captureee</button>
                <button class="dropdown-item-chart">captureee</button>
              </div>
            </div>
            <div class="share-idea-chart dropdown-container-chart icon-with-tooltip" data-tooltip="Share">
              <button class="nav-chart--button" data-target="popup-share"><i class="fas fa-share-from-square"></i></button>
              <div id="popup-share" class="dropdown-menu-chart menu-share ">
                <button class="dropdown-item-chart">shareeee</button>
                <button class="dropdown-item-chart">shareeee</button>
                <button class="dropdown-item-chart">shareeee</button>
                <button class="dropdown-item-chart">shareeee</button>
                <button class="dropdown-item-chart">shareeee</button>
              </div>
            </div>
          </div>

          <!-- Contenedores de popups -->
          <div id="popup-overlay-chart" class="popup-overlay-chart"></div>
          <div id="popup-search" class="popup-chart">
            <button class="close-popup-chart">&times;</button>
            Contenido de Search
          </div>
          <div id="popup-compare" class="popup-chart">
            <button class="close-popup-chart">&times;</button>
            Contenido de Compare
          </div>
          <div id="popup-indicators" class="popup-chart">
            <button class="close-popup-chart">&times;</button>
            Contenido de Indicators
          </div>
          <div id="popup-alert" class="popup-chart">
            <button class="close-popup-chart">&times;</button>
            Contenido de Alert
          </div>
          <div id="popup-replay" class="popup-chart">
            <button class="close-popup-chart">&times;</button>
            Contenido de Replay
          </div>
          <div id="popup-quickSearch" class="popup-chart">
            <button class="close-popup-chart">&times;</button>
            Contenido de Quick Search
          </div>
          <div id="popup-settings" class="popup-chart">
            <button class="close-popup-chart">&times;</button>
            Contenido de Settings
          </div>


        </div>

        <div class="roww">
          <div class="sidenav-chart-left">2</div>
          <div class="columnn">
            <div class="chart">
              <iframe src="https://s.tradingview.com/widgetembed/?symbol=NASDAQ:AAPL&theme=dark&style=1&timezone=Etc/UTC" 
              width="100%" height="500" frameborder="0" allowfullscreen>
              </iframe>
            </div>
            <div class="toolbar-chart">
              <div class="toggle-btn">
                <i class="fa-solid fa-chevron-up"></i> 
              </div>

            </div>
          </div>
          <div class="alerts-chart">

          </div>
          <div class="sidenav-chart-right">          
            <button class="btn-open-panel"><i class="fas fa-stopwatch"></i></button>

          </div>
        </div>
      </section>
        
    </main>

    <!-- <div id="whatsapp" class="btnWsp">
      <a href="https://wa.me/+5493416744997" class="btn-wsp" target="_blank">
        <img
          src="../assets/icons/whatsapp.png"
          style="width: 3rem"
          alt="logowsp"
        />
      </a>
    </div> -->

    <!-- Footer -->

    <!-- <footer class="footerr">
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
    </footer> -->
    

    
    
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
