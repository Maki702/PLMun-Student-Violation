<footer class="main-footer">

    <p>
        © 2026 Pamantasan ng Lungsod ng Muntinlupa
    </p>

    <p>
        Student Violation and Community Service Tracking System
    </p>

</footer>
<button id="backToTop" title="Back to Top">
    ↑
</button>

<script src="../js/top-toggle.js"></script>

<script>

const menuToggle = document.getElementById("menuToggle");
const navbar = document.getElementById("navbar");

if (menuToggle && navbar) {

    menuToggle.addEventListener("click", function () {

        navbar.classList.toggle("active");

        const isOpen = navbar.classList.contains("active");

        menuToggle.setAttribute("aria-expanded", isOpen);

    });

}

</script>

</body>

</html>