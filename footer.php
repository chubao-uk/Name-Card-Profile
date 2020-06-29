</div>
<script>
    $(window).resize(function () {

        if ($(window).width() >= 500) {

            clickPin();
            spinCard();
        } else {
            resetHolder();
            resetCard();
            $(".construct .card").each(function () {

                $(this).css("transform", "rotate(0deg)");
                $(this).css("z-index", $(this).attr("oindex"));
            })
        }
    });
    $(document).ready(function () {

        if ($(window).width() >= 500) {

            clickPin();
            spinCard();
        } else {
            resetHolder();
            resetCard();
        }
    })

    $(".skills li ").hover(
        function () {

            $(".dialog").html($(this).attr("content"));
            $(".dialog").show();
        },
        function () {
            $(".dialog").html();
            $(".dialog").hide();

        }
    )

    function resetHolder() {

        $("#card-holder").removeClass("destruct");
        $("#card-holder").removeClass("expand");
        $("#card-holder").addClass("construct");

    }

    function spinCard() {

        $(".construct").hover(function () {

            if ($(window).width() >= 500) {
                if (!$(".construct").hasClass("expand")) {

                    console.log("expand");
                    $(this).addClass("expand");
                    $(".construct.expand .card").each(function () {

                        $(this).css("transform", "rotate(" + $(this).attr("origin") + "deg)");
                    })
                    hoverCard();

                }
            }


        });
    }

    function clickPin() {

        $(".pin").click(function () {

            if ($(window).width() >= 500) {
                $("#message").hide();
                if ($("#card-holder").hasClass("construct")) {

                    $("#card-holder").removeClass("construct");
                    $("#card-holder").addClass("destruct");

                    $(".destruct .card").each(function () {
                        $(this).css("transform", "rotate(0deg)");
                        $(this).css("z-index", $(this).attr("oindex"));
                    })
                }

            }

        });
    }

    function hoverCard() {
        $(".construct.expand .card").hover(
            function () {
                //console.log($(this).attr("index"));

                $(".construct.expand .card").not(this).css("transform", "rotate(90deg)");
                $(this).css("transform", "rotate(0deg)");
                // $(this).css("z-index", "5");


            },
            function () {
                //console.log($(this).attr("index"));
                resetOrigin();
            });
    }

    function resetOrigin() {
        console.log("reset rotate");
        $(".construct.expand .card").each(function () {
            $(this).css("transform", "rotate(" + $(this).attr("origin") + "deg)");
            $(this).css("z-index", $(this).attr("oindex"));
        })
    }

    function resetCard() {
        $(".construct .card").hover(
            function () {
                $(this).css("z-index", "5");

            },
            function () {
                //console.log($(this).attr("index"));
                $(".construct .card").each(function () {
                    $(this).css("z-index", $(this).attr("oindex"));
                })
            });
    }
</script>
</body>
</html>

