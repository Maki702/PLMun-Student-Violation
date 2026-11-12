const backToTop = document.getElementById("backToTop");

// Show button when scrolling down.
window.addEventListener("scroll", function () {

    if (window.scrollY > 200) {
        backToTop.style.display = "flex";
    } else {
        backToTop.style.display = "none";
    }

});

// Scroll smoothly to the top when clicked.
backToTop.addEventListener("click", function () {

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

});