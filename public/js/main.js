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

    $("ul.menu li.link-nav i.caret").click(function () {
        $(this.parentElement).children(".sub-menu").slideToggle();
        $(this.parentElement).toggleClass("link-nav-active");
    });

    $(".go-toTop").click(function () {
        window.scrollTo(0, 0);
    });

    $(".open-modal").click(function () {
        $(".lightbox").addClass("show");
    });

    $(".close-modal").click(function () {
        $(".lightbox").removeClass("show");
    });

    $(window).on("keyup", function (e) {
        if (e.keyCode == 27) {
            $(".lightbox").removeClass("show");
        }
    });
});
