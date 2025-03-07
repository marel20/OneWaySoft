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
                window.location.href = "home.php";
            });
        } else {
            console.error("❌ popupLogin o loginPopup no encontrado en el DOM.");
        }
    }

    initNavbar();
    initPopup();
});