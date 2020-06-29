
<script>
    $(".menu-btn").click(function () {
        $(".menu-btn").fadeOut();
        $(".menu").addClass("active");
        $(".close-btn").fadeIn();

    });
    $(".close-btn").click(function () {
        $(".close-btn").fadeOut();
        $(".menu").removeClass("active");
        $(".menu-btn").fadeIn();

    });
   
    $(".close-preview").click(function () {
        $(".preview, .close-preview").removeClass("active");
        $(".preview").html();
    });
</script>
</body>
</html>

