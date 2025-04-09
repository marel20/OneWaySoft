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

        const btnOpenAlerts = document.querySelector(".btn-open-alerts");
        const alerts = document.querySelector(".alerts");
        const contentPage = document.querySelector(".content-page");
        const scrollNavv = document.querySelector(".scroll-navv");

        if (btnOpenAlerts && alerts && contentPage && scrollNavv) {
            btnOpenAlerts.addEventListener("click", function() {
                if (alerts.classList.contains("open2")) {
                    alerts.classList.remove("open2");
                    contentPage.style.width = "96%";
                    scrollNavv.style.width = "96%";
                } else {
                    alerts.classList.add("open2");
                    contentPage.style.width = "71%";
                    scrollNavv.style.width = "71%";
                }
            });
        }

    


    //toolbar-chart
        const toggleBtn = document.querySelector(".toggle-btn");
        const toolbarChart = document.querySelector(".toolbar-chart");
        const chart = document.querySelector(".chart");

        if (toggleBtn && toolbarChart) {
            toggleBtn.addEventListener("click", function() {
                let icono = this.querySelector("i");
                toolbarChart.classList.toggle("expanded");

                if (toolbarChart.classList.contains("expanded")) {
                    icono.classList.replace("fa-chevron-up", "fa-chevron-down");
                    chart.style.height = "20vh";
                    chart.style.transition = "0.5s ease-in-out";

                } else {
                    icono.classList.replace("fa-chevron-down", "fa-chevron-up");
                    chart.style.height = "80vh";
                    chart.style.transition = "0.10s ease-in-out";
                }
            });
        }


    //panel alert
    function panelAlert() {
        const btnOpenPanel = document.querySelector(".btn-open-panel");
        const alertsChart = document.querySelector(".alerts-chart");
        const columnn = document.querySelector(".columnn");

        if (btnOpenPanel && alertsChart && columnn) {
            alertsChart.classList.remove("open");
            columnn.style.width = "92%";

            btnOpenPanel.addEventListener("click", function() {
                if (alertsChart.classList.contains("open")) {
                    alertsChart.classList.remove("open");
                    columnn.style.width = "92%";
                } else {
                    alertsChart.classList.add("open");
                    columnn.style.width = "70%";
                }
            });
        }
    }

    //panel user chart
    function userPanelChart() {
        const userIcon = document.querySelector(".user-icon");
        const userMenu = document.querySelector(".user-menu");
      
        // Abrir y cerrar menú
        userIcon.addEventListener("click", function (event) {
          userMenu.classList.toggle("active");
          event.stopPropagation(); // Evita que se cierre inmediatamente
        });
      
        // Cerrar menú al hacer clic fuera
        document.addEventListener("click", function (event) {
          if (!userMenu.contains(event.target) && !userIcon.contains(event.target)) {
            userMenu.classList.remove("active");
          }
        });
    }

    //navbar chart
        function navbarChart() {
            const overlay = document.getElementById("popup-overlay-chart");

            // POPUPS FLOTANTES
            const popupButtons = {
              searchChart: "popup-search",
              compareChart: "popup-compare",
              indicatorsChart: "popup-indicators",
              createAlertChart: "popup-alert",
              barReplayChart: "popup-replay",
              quickSearchChart: "popup-quickSearch",
              settingsChart: "popup-settings",
            };
          
            for (const [buttonId, popupId] of Object.entries(popupButtons)) {
              const button = document.getElementById(buttonId);
              const popup = document.getElementById(popupId);
              if (button && popup) {
                button.addEventListener("click", function () {
                  closeAllPopups();
                  popup.classList.add("active");
                  overlay.classList.add("active");
                });
              }
            }
          
            // Cerrar popup al hacer clic fuera
            overlay.addEventListener("click", function () {
              closeAllPopups();
            });
          
            function closeAllPopups() {
              document.querySelectorAll(".popup-chart").forEach(p => p.classList.remove("active"));
              document.querySelectorAll(".dropdown-menu-chart").forEach(p => p.classList.remove("active"));
              overlay.classList.remove("active");
            }

            document.querySelectorAll(".close-popup-chart").forEach(btn => {
                btn.addEventListener("click", () => {
                  closeAllPopups();
                });
              });
          
            // DROPDOWNS
            const dropdownButtons = document.querySelectorAll(".nav-chart--button");
          
            dropdownButtons.forEach(button => {
              button.addEventListener("click", function (e) {
                e.stopPropagation();
                const targetId = this.dataset.target;
                if (!targetId) return;
          
                const dropdown = document.getElementById(targetId);
                const isOpen = dropdown.classList.contains("active");
          
                closeAllPopups(); // cierra otros popups/dropdowns
                if (!isOpen) {
                  dropdown.classList.add("active");
                }
              });
            });
          
            // Cerrar dropdown si se hace click fuera
            document.addEventListener("click", function (e) {
              if (!e.target.closest(".dropdown-container-chart")) {
                document.querySelectorAll(".dropdown-menu-chart").forEach(menu => menu.classList.remove("active"));
              }
            });
          
            // Evitar propagación del clic dentro del dropdown
            document.querySelectorAll(".dropdown-menu-chart").forEach(menu => {
              menu.addEventListener("click", e => e.stopPropagation());
            });


        }
    
    //search bar chart
    // function searchBarChart() {
    //     const btnSearch = document.getElementById("btnSearchChart");
    //     const popup = document.getElementById("searchPopupChart");
    //     const closePopup = document.querySelector(".close-popup-search-chart");
    //     const searchBar = document.getElementById("searchBarChart");
    //     const searchResults = document.getElementById("searchResultsChart");

    //     // Abrir el popup al hacer clic en el botón
    //     btnSearch.addEventListener("click", () => {
    //         popup.style.display = "flex";
    //         searchBar.focus(); // Autofocus en la barra de búsqueda
    //     });

    //     // Cerrar el popup al hacer clic en el botón de cerrar o fuera del popup
    //     closePopup.addEventListener("click", () => {
    //         popup.style.display = "none";
    //     });

    //     window.addEventListener("click", (e) => {
    //         if (e.target === popup) {
    //             popup.style.display = "none";
    //         }
    //     });

    //     // Función de búsqueda en tiempo real
    //     searchBar.addEventListener("keyup", () => {
    //         const filter = searchBar.value.toLowerCase();
    //         const items = searchResults.getElementsByTagName("li");

    //         for (let item of items) {
    //             let text = item.textContent.toLowerCase();
    //             item.style.display = text.includes(filter) ? "block" : "none";
    //         }
    //     });
    // }

    panelAlert();
    initNavbar();
    initNavbar2();
    initPopup();
    userPanelChart();
    navbarChart();
    // searchBarChart();
});


