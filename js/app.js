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

        function updateNewYorkClock() {
          const now = new Date();
        
          // Mostrar hora actual en Nueva York (24h)
          const nyTime = new Intl.DateTimeFormat('en-US', {
            timeZone: 'America/New_York',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
          }).format(now);
          document.getElementById("clock-chart").textContent = nyTime;
        
          // Calcular offset UTC (corrigiendo el signo)
          const utcDate = new Date(now.toLocaleString("en-US", { timeZone: "UTC" }));
          const nyDate = new Date(now.toLocaleString("en-US", { timeZone: "America/New_York" }));
        
          const offsetMinutes = (nyDate - utcDate) / (1000 * 60); // NY - UTC
          const offsetHours = offsetMinutes / 60;
          const formattedOffset = offsetHours >= 0 ? `+${offsetHours}` : offsetHours;
        
          // Mostrar "New York | UTC -4"
          document.getElementById("UTC-chart").textContent = `New York UTC ${formattedOffset}`;
        }
        
        setInterval(updateNewYorkClock, 1000);
        updateNewYorkClock();
        


    //toolbar-chart
    const toggleBtn = document.querySelector(".toggle-btn");
    const toolbarChart = document.querySelector(".toolbar-chart");
    const chart = document.querySelector(".chart");
    
    if (toggleBtn && toolbarChart) {
      toggleBtn.addEventListener("click", function () {
        const icono = this.querySelector("i");
        toolbarChart.classList.toggle("expanded");
    
        if (toolbarChart.classList.contains("expanded")) {
          icono.classList.replace("fa-chevron-up", "fa-chevron-down");
          chart.style.height = "20vh"; // Reducir altura del chart
          chart.style.transition = "height 0.5s ease-in-out";
        } else {
          icono.classList.replace("fa-chevron-down", "fa-chevron-up");
          chart.style.height = "80vh"; // Volver a altura original
          chart.style.transition = "height 0.5s ease-in-out";
        }
      });
    }
        // const toggleBtn = document.querySelector(".toggle-btn");
        // const toolbarChart = document.querySelector(".toolbar-chart");
        // const chart = document.querySelector(".chart");

        // if (toggleBtn && toolbarChart) {
        //     toggleBtn.addEventListener("click", function() {
        //         let icono = this.querySelector("i");
        //         toolbarChart.classList.toggle("expanded");

        //         if (toolbarChart.classList.contains("expanded")) {
        //             icono.classList.replace("fa-chevron-up", "fa-chevron-down");
        //             chart.style.height = "20vh";
        //             chart.style.transition = "0.5s ease-in-out";
        //             toolbarChart.style.height = "80vh";

        //         } else {
        //             icono.classList.replace("fa-chevron-down", "fa-chevron-up");
        //             chart.style.height = "80vh";
        //             chart.style.transition = "0.10s ease-in-out";
        //             toolbarChart.style.height = "20vh";
        //         }
        //     });
        // }


    //panel alert
    // function panelAlert() {
    //     const btnOpenPanel = document.querySelector(".btn-open-panel");
    //     const alertsChart = document.querySelector(".alerts-chart");
    //     const columnn = document.querySelector(".columnn");

    //     if (btnOpenPanel && alertsChart && columnn) {
    //         alertsChart.classList.remove("open");
    //         columnn.style.width = "92%";

    //         btnOpenPanel.addEventListener("click", function() {
    //             if (alertsChart.classList.contains("open")) {
    //                 alertsChart.classList.remove("open");
    //                 columnn.style.width = "92%";
    //             } else {
    //                 alertsChart.classList.add("open");
    //                 columnn.style.width = "70%";
    //             }
    //         });
    //     }
    // }

    function panelAlert() {
      const buttons = document.querySelectorAll(".btn-open-panel");
      const alertsChart = document.querySelector(".alerts-chart");
      const columnn = document.querySelector(".columnn");
    
      const tooltipTexts = [
        "Alerta 1", "Alerta 2", "Alerta 3", "Alerta 4",
        "Indicador 1", "Indicador 2", "Indicador 3",
        "Notificación 1", "Notificación 2", "Notificación 3"
      ];
    
      const panelContents = [
        `<h3 style="color:white;">Contenido de Alerta 1</h3>`,
        `<h3 style="color:white;">Contenido de Alerta 2</h3>`,
        `<h3 style="color:white;">Contenido de Alerta 3</h3>`,
        `<h3 style="color:white;">Contenido de Alerta 4</h3>`,
        `<h3 style="color:white;">Contenido de Indicador 1</h3>`,
        `<h3 style="color:white;">Contenido de Indicador 2</h3>`,
        `<h3 style="color:white;">Contenido de Indicador 3</h3>`,
        `<h3 style="color:white;">Contenido de Notificación 1</h3>`,
        `<h3 style="color:white;">Contenido de Notificación 2</h3>`,
        `<h3 style="color:white;">Contenido de Notificación 3</h3>`
      ];
    
      // Crear el handle una vez
      const resizeHandle = document.createElement("div");
      resizeHandle.classList.add("resize-handle");
    
      // Resize manual del panel
      let isResizing = false;
      resizeHandle.addEventListener("mousedown", function (e) {
        isResizing = true;
        document.body.style.cursor = "ew-resize";
      });
    
      document.addEventListener("mousemove", function (e) {
        if (!isResizing) return;
    
        const windowWidth = window.innerWidth;
        let newWidth = windowWidth - e.clientX;
        const min = windowWidth * 0.22;
        const max = windowWidth * 0.37;
    
        if (newWidth < min) newWidth = min;
        if (newWidth > max) newWidth = max;
    
        alertsChart.style.width = `${newWidth}px`;
        columnn.style.width = `${100 - (newWidth / windowWidth) * 100}%`;
      });
    
      document.addEventListener("mouseup", function () {
        isResizing = false;
        document.body.style.cursor = "";
      });
    
      buttons.forEach((button, index) => {
        button.classList.add("tooltip-button-sidenav-right");
        button.setAttribute("title", tooltipTexts[index]);
    
        button.addEventListener("click", () => {
          const currentIndex = alertsChart.dataset.activeIndex;
    
          if (currentIndex == index) {
            alertsChart.classList.remove("open", "resizable");
            alertsChart.style.width = "0";
            alertsChart.dataset.activeIndex = "";
            if (columnn) columnn.style.width = "92%";
            return;
          }
    
          const isFirstFour = index < 4;
          const width = isFirstFour ? "22%" : "37%";
          const columnWidth = isFirstFour ? "70%" : "60%";
    
          alertsChart.classList.add("open");
          alertsChart.style.width = width;
          alertsChart.dataset.activeIndex = index;
          alertsChart.innerHTML = panelContents[index];
          if (columnn) columnn.style.width = columnWidth;
    
          if (!isFirstFour) {
            alertsChart.classList.add("resizable");
            if (!alertsChart.contains(resizeHandle)) {
              alertsChart.appendChild(resizeHandle); // ⬅️ se agrega SOLO dentro del alerts-chart
            }
          } else {
            alertsChart.classList.remove("resizable");
            if (alertsChart.contains(resizeHandle)) {
              alertsChart.removeChild(resizeHandle); // ⬅️ se remueve si no corresponde
            }
          }
        });
      });
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

        function sidenavChartLeft() {
            const scrollContainer = document.querySelector(".sidenav-chart-left");
          
            const buttons = [
              { num: 1, tooltip: "Abrir opciones", dropdown: [ "Opción A", "Opción B", "Opción C", "Opción D", "Opción E" ], icon: "fas fa-cog" },
              { num: 2, tooltip: "Abrir gráfico", dropdown: [ "1D", "1W", "1M" ], icon: "fas fa-chart-line" },
              { num: 3, tooltip: "Estudios técnicos", dropdown: [ "RSI", "MACD", "Bollinger", "EMA" ], icon: "fas fa-wave-square" },
              { num: 4, tooltip: "Indicadores", dropdown: [ "Volumen", "ADX", "Estocástico" ], icon: "fas fa-sliders-h" },
              { num: 5, tooltip: "Plantillas", dropdown: [ "Guardar", "Cargar", "Eliminar", "Compartir" ], icon: "fas fa-layer-group" },
              { num: 6, tooltip: "Alertas", dropdown: [ "Crear alerta", "Ver alertas" ], icon: "fas fa-bell" },
              { num: 7, tooltip: "Diseño", dropdown: [ "Color de fondo", "Tipo de vela", "Rejilla", "Zoom" ], icon: "fas fa-paint-brush" },
              { num: 8, tooltip: "Otras herramientas", dropdown: [ "Medida", "Captura", "Comparar" ], icon: "fas fa-tools" },
              "line",
              { num: 9, tooltip: "Seleccionar cruz", toggle: true, icon: "fas fa-crosshairs" },
              { num: 10, tooltip: "Seleccionar puntero", toggle: true, icon: "fas fa-mouse-pointer" },
              "line",
              { num: 11, tooltip: "Dibujar", dropdown: [ "Línea", "Canal", "Flecha", "Fibbo", "Rectángulo", "Texto" ], icon: "fas fa-pencil-ruler" },
              { num: 12, tooltip: "Activar regla", toggle: true, icon: "fas fa-ruler" },
              { num: 13, tooltip: "Activar notas", toggle: true, icon: "fas fa-sticky-note" },
              { num: 14, tooltip: "Más", dropdown: [ "Calendario", "Noticias", "Historial" ], icon: "fas fa-ellipsis-v" },
              "line",
              { num: 15, tooltip: "Herramientas extra", dropdown: [ "Exportar", "Importar" ], icon: "fas fa-toolbox" }
            ];
          
            function createDropdown(items, referenceBtn) {
                const dropdown = document.createElement("div");
                dropdown.className = "dropdown-right-sidenav";
              
                items.forEach(item => {
                  const link = document.createElement("a");
                  link.href = "#";
                  link.textContent = item;
                  dropdown.appendChild(link);
                });
              
                document.body.appendChild(dropdown);
              
                const rect = referenceBtn.getBoundingClientRect();
                const dropdownHeight = dropdown.offsetHeight;
                const viewportHeight = window.innerHeight;
              
                let top = rect.top;
              
                // Si el dropdown se va a salir de la pantalla, lo reposicionamos hacia arriba
                if (rect.top + dropdownHeight > viewportHeight) {
                  const overlap = rect.top + dropdownHeight - viewportHeight;
                  top = rect.top - overlap - 5; // un margen de seguridad
                  if (top < 0) top = 5; // por si se pasa muy arriba
                }
              
                dropdown.style.top = `${top}px`;
                dropdown.style.left = `${rect.right + 5}px`;
              
                return dropdown;
              }
          
            buttons.forEach((item) => {
              if (item === "line") {
                const divider = document.createElement("div");
                divider.className = "line-border-bottom";
                scrollContainer.appendChild(divider);
                return;
              }
          
              const wrapper = document.createElement("div");
              wrapper.className = "sidenav-left-button";
          
              const btn = document.createElement("button");
              btn.innerHTML = `<i class="${item.icon}"></i>`;
              wrapper.appendChild(btn);
          
              const tooltip = document.createElement("div");
              tooltip.className = "tooltip-right-sidenav";
              tooltip.textContent = item.tooltip;
              wrapper.appendChild(tooltip);
          
              let dropdown = null; // <--- Se declara afuera del if
          
              if (item.dropdown) {
                btn.addEventListener("click", (e) => {
                  e.stopPropagation();
          
                  const isOpen = dropdown && dropdown.style.display === "flex";
                  closeAllDropdowns();
          
                  if (!isOpen) {
                    if (!dropdown) {
                      dropdown = createDropdown(item.dropdown, wrapper);
                    }
          
                    const rect = wrapper.getBoundingClientRect();
                    dropdown.style.top = `${rect.top}px`;
                    dropdown.style.left = `${rect.right + 5}px`;
                    dropdown.style.display = "flex";
                  }
                });
              }
          
              wrapper.addEventListener("mouseenter", () => {
                const rect = wrapper.getBoundingClientRect();
                tooltip.style.top = `${rect.top + rect.height / 2}px`;
                tooltip.style.left = `${rect.right + 5}px`;
                tooltip.style.transform = "translateY(-50%)";
                tooltip.style.display = "block";
                document.body.appendChild(tooltip);
              });
          
              wrapper.addEventListener("mouseleave", () => {
                tooltip.style.display = "none";
                if (tooltip.parentNode === document.body) {
                  document.body.removeChild(tooltip);
                }
              });
          
              if (item.toggle) {
                btn.addEventListener("click", () => {
                  wrapper.classList.toggle("active");
                });
              }
          
              scrollContainer.appendChild(wrapper);
            });
          
            function closeAllDropdowns() {
              document.querySelectorAll(".dropdown-right-sidenav").forEach((el) => {
                el.style.display = "none";
              });
            }
          
            document.addEventListener("click", (e) => {
              if (!e.target.closest(".sidenav-left-button")) {
                closeAllDropdowns();
              }
            });
          }


    panelAlert();
    initNavbar();
    initNavbar2();
    initPopup();
    userPanelChart();
    navbarChart();
    sidenavChartLeft();
});


