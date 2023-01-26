    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="#"> </p>
        </div>
    </div>
    <!-- copyright section end -->

    <?php wp_footer(); ?>

    
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";

        }

        $("#main").click(function () {
            $("#navbarSupportedContent").toggleClass("nav-normal")
        })
    </script>
</body>

</html>