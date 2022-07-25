window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        document.querySelector(".nav").classList.add("active");
        document.querySelector(".icon img").style.display = "none";
    } else {
        document.querySelector(".nav").classList.remove("active");
        document.querySelector(".icon img").style.display = "block";
    }
});
