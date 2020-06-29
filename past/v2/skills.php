<?php
include("header.php");
?>
    <section class="skills">
        <div class="mid-container center-wrap">
            <h2 class="blue">My Skills:</h2>
            <ul>
                <li> - PHP</li>
                <li> - jQuery</li>
                <li> - JavaScript</li>
                <li> - CSS</li>
                <li> - MySQL</li>
                <li> - Customized Content Management System (CMS)</li>
                <li> - OpenCart</li>
                <li> - Investor Relations Website</li>
                <li> - Backend Development</li>
                <li> - Responsive Website</li>
            </ul>

        </div>
        <svg class="draw-to-skills"></svg>
        <div class="skills-content">

        </div>

    </section>

    <script>

        $(".skills li").click(function () {

            var start_point_x = $(this).offset().left + $(this).width();
            var start_point_y = $(this).offset().top + $(this).height() / 2;

            var end_point_x =  start_point_x - $(".skills-content").offset().left;
            var end_point_y = $(".skills-content").offset().top;

            alert(start_point_x + '  ,' + start_point_y + '\n' + end_point_x + ' ,' + end_point_y);

            //var end_point_y = $(".skills-content").offset().top;
            $(".draw-to-skills").html('<line x1="' + start_point_x + '" y1="' + start_point_y + '" x2="' + end_point_x + '" y2="' + start_point_y + '" stroke="#b8f2e6"/>');

        });
    </script>
<?php
include("footer.php");
?>