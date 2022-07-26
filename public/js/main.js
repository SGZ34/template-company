$(document).ready(function () {
    let posicionOnLoad = window.pageYOffset;
    if (posicionOnLoad >= 200) {
        document.querySelector(".nav").classList.add("active");
        document.querySelector(".icon img").style.display = "none";
    } else if (posicionOnLoad < 200) {
        document.querySelector(".nav").classList.remove("active");
        document.querySelector(".icon img").style.display = "block";
    }
    $(window).on("scroll", function () {
        if (window.scrollY > 0) {
            document.querySelector(".nav").classList.add("active");
            document.querySelector(".icon img").style.display = "none";
        } else {
            document.querySelector(".nav").classList.remove("active");
            document.querySelector(".icon img").style.display = "block";
        }
    });
    $(".icon-menu").on("click", function () {
        document.querySelector("ul.menu").classList.toggle("menu-active");
    });
});
