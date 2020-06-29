</div>
<script>
    $(".menu-btn").click(function () {
        if ($(this).hasClass("active")) {

            $(this).removeClass("active");
            $(".menu").removeClass("active");
            $("#global-container").removeClass("expand");
        } else {
            $(this).addClass("active");
            $(".menu").addClass("active");
            $("#global-container").addClass("expand");

        }


    });
    $("a.go").click(function (e) {

        e.preventDefault();
        linkLocation = this.href;
        $('body').addClass('page-change');


        setTimeout(function () {
            window.location = linkLocation;

        }, 1000);


    });
</script>
</body>
</html>

