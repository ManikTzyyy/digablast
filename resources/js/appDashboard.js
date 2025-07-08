
document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector('#sidebar');
    const menuTrigger = document.querySelectorAll('#menu-trigger');
    const title = document.querySelector("#title-sidebar");
    const menuText = document.querySelectorAll(".menu-text");
    const menuButton = document.querySelector("#button-sidebar");

    menuButton.addEventListener("click", () => {
        sidebar.classList.toggle('collapse-menu');
        title.classList.toggle('hidden-menu');
        for (const item of menuText) {
            item.classList.toggle('hidden-menu');
        }

        for (const item of menuTrigger){
            item.classList.toggle('group');
        }
    });
});
