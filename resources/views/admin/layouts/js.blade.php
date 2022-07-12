<script src="{{ asset('vendors/mazer/assets/js/app.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function(event) { 
        window.appDarkMode = document.body.classList.contains("theme-dark")
    });
</script>

<!-- use dashboard js if u have chart only -->
<!-- <script src="{{ asset('vendors/mazer/assets/js/pages/dashboard.js') }}"></script>  -->
@yield('js')