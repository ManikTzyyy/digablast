document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector("#sidebar");
    const menuTrigger = document.querySelectorAll("#menu-trigger");
    const title = document.querySelector("#title-sidebar");
    const menuText = document.querySelectorAll(".menu-text");
    const menuButton = document.querySelector("#button-sidebar");
    const buttonIcon = document.querySelector("#button-icon");

    buttonIcon.classList.add("fa-angles-right");

    menuButton.addEventListener("click", () => {
        sidebar.classList.toggle("collapse-menu");
        if (sidebar.classList.contains("expand-menu")) {
            buttonIcon.classList.add("fa-angles-right");
            buttonIcon.classList.remove("fa-angles-left");
        } else {
            buttonIcon.classList.add("fa-angles-left");
            buttonIcon.classList.remove("fa-angles-right");
        }
        title.classList.toggle("hidden-menu");
        sidebar.classList.toggle("expand-menu");
        for (const item of menuText) {
            item.classList.toggle("hidden-menu");
        }

        for (const item of menuTrigger) {
            item.classList.toggle("group");
        }
    });
});

// document.addEventListener("DOMContentLoaded", function () {
//     const sidebar = document.querySelector("#sidebar");
//     const menuTrigger = document.querySelectorAll("#menu-trigger");
//     const title = document.querySelector("#title-sidebar");
//     const menuText = document.querySelectorAll(".menu-text");
//     const menuButton = document.querySelector("#button-sidebar");
//     const buttonIcon = document.querySelector("#button-icon");

//     function setCollapseState(collapsed) {
//         if (collapsed) {
//             sidebar.classList.add("collapse-menu");
//             title.classList.add("hidden-menu");
//             buttonIcon.classList.add("fa-angles-right");
//             buttonIcon.classList.remove("fa-angles-left");
//             menuText.forEach((item) => item.classList.add("hidden-menu"));
//             menuTrigger.forEach((item) => item.classList.add("group"));
//         } else {
//             sidebar.classList.remove("collapse-menu");
//             title.classList.remove("hidden-menu");
//             buttonIcon.classList.add("fa-angles-left");
//             buttonIcon.classList.remove("fa-angles-right");
//             menuText.forEach((item) => item.classList.remove("hidden-menu"));
//             menuTrigger.forEach((item) => item.classList.remove("group"));
//         }
//     }

//     // Inisialisasi default: collapse jika lebar < 640px
//     if (window.innerWidth < 640) {
//         setCollapseState(true);
//     } else {
//         setCollapseState(false);
//     }

//     // Tombol toggle manual
//     menuButton.addEventListener("click", () => {
//         const isCollapsed = sidebar.classList.contains("collapse-menu");
//         setCollapseState(!isCollapsed);
//     });

//     // (Optional) Responsif saat resize
//     window.addEventListener("resize", () => {
//         if (window.innerWidth < 640) {
//             setCollapseState(true);
//         }
//     });
// });
