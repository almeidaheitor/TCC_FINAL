document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.getElementById("menuButton");
    const menu = document.getElementById("menu");

    menuButton.addEventListener("click", function() {
        menu.classList.toggle("show-menu");
    });

    document.addEventListener("click", function(event) {
        const isClickInsideMenu = menu.contains(event.target);
        const isClickOnButton = event.target === menuButton;

        if (!isClickInsideMenu && !isClickOnButton) {
            menu.classList.remove("show-menu");
        }
    });

    // Fecha o menu quando é clicado
    const menuItems = document.querySelectorAll("#menu a");
    menuItems.forEach(function(item) {
        item.addEventListener("click", function() {
            menu.classList.remove("show-menu");
        });
    });
});

  