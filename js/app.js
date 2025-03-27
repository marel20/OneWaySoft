document.addEventListener("DOMContentLoaded", function () {
    function initNavbar() {
        const menuToggle = document.querySelector(".menu-toggle");
        const navMenu = document.querySelector(".nav-links");
        const navLinks = document.querySelectorAll(".nav-links a");

        if (menuToggle && navMenu) {
            menuToggle.addEventListener("click", function () {
                navMenu.classList.toggle("active");
                menuToggle.classList.toggle("active");
            });

            navLinks.forEach(link => {
                link.addEventListener("click", function () {
                    navMenu.classList.remove("active");
                    menuToggle.classList.remove("active");
                });
            });
        }
    }

    function initNavbar2() {
        const menuToggle = document.querySelector(".menu-toggle");
        const navMenu2 = document.querySelector(".nav-links2");
        const navLinks2 = document.querySelectorAll(".nav-links2 a");

        if (menuToggle && navMenu2) {
            menuToggle.addEventListener("click", function () {
                navMenu2.classList.toggle("active");
                menuToggle.classList.toggle("active");
            });

            navLinks2.forEach(link => {
                link.addEventListener("click", function () {
                    navMenu2.classList.remove("active");
                    menuToggle.classList.remove("active");
                });
            });
        }
    }

    function initPopup() {
        const popupLogin = document.getElementById("popupLogin");
        const loginPopup = document.getElementById("login-popup");
        const closePopup = document.querySelector(".close-popup-login");
        const loginMobile = document.getElementById("loginMobile");

        if (popupLogin && loginPopup) {
            // Abrir popup al hacer clic en el botón de login
            popupLogin.addEventListener("click", function () {
                loginPopup.classList.add("active");
            });

            // Cerrar popup al hacer clic en la cruz
            closePopup.addEventListener("click", function () {
                loginPopup.classList.remove("active");
            });

            // Cerrar popup al hacer clic fuera del contenido
            window.addEventListener("click", function (e) {
                if (e.target === loginPopup) {
                    loginPopup.classList.remove("active");
                }
            });

            // Redirigir a home.php al hacer clic en "Ingresar"
            loginMobile.addEventListener("click", function () {
                window.location.href = "pages/homeSoft.php";
            });
        } else {
            console.error("❌ popupLogin o loginPopup no encontrado en el DOM.");
        }
    }

    const loginPC = document.getElementById("loginPC");

    function redirigir() {
        window.location.href = "pages/homeSoft.php"; // Cambia esto por tu URL real
    }

    if (loginPC) {
        loginPC.addEventListener("click", redirigir);
    }

    const scrollNav = document.querySelector(".scroll-navv");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 10) { // Cuando el usuario baja un poco
        scrollNav.classList.add("show-scroll-nav");
        } else {
            scrollNav.classList.remove("show-scroll-nav");
        }
    });

   
    initNavbar();
    initNavbar2();
    initPopup();

});


