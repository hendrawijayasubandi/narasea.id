<style>
    #scrollToTopBtn {
        position: fixed;
        bottom: 40px;
        right: 40px;
        width: 75px;
        height: auto;
        cursor: pointer;
        display: none;
        opacity: 0.8;
        transition: opacity 0.3s ease;
        z-index: 1000;
        background: transparent;
    }

    #scrollToTopBtn:hover {
        opacity: 1;
    }
</style>

<img src="{{ asset('assets/images/btn-back-to-top.png') }}" alt="Scroll to Top" id="scrollToTopBtn" title="Back to top" />

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById("scrollToTopBtn");

        window.addEventListener("scroll", function() {
            if (window.scrollY > 300) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        });

        btn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    });
</script>
