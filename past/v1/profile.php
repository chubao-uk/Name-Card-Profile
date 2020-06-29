<?php
include("header.php");
?>
<div class="container profile-container">
    <h1>Profile</h1>

    <div class="paragraph">
        <h2>Working Experience</h2>
    </div>
    <ul class="work-list">
        <li>
            <div class="paragraph">
                <h3>2016 - Present</h3> <br>
                Senior Web Programmer (PHP) <br> Black Media Group Limited
            </div>
        </li>
        <li>
            <div class="paragraph">
                <h3>2013 - 2016</h3> <br>
                Web Programmer (PHP) <br> Black Media Group Limited
            </div>
        </li>
    </ul>

    <div class="paragraph">Education Background</div>

    <ul class="list">
        <li>
            <a class="expand">
                <img src="imgs/profile/1.jpg"/>
            </a>
            <div class="paragraph">
                2012-2013 <br>
                University of West of England Bristol Information Technology (BSc)   <br>
                First Class Honours
            </div>
        </li>
        <li>
            <a class="expand">
                <img src="imgs/profile/2.jpg"/>
            </a>
            <div class="paragraph">
                2009-2012  <br>
                Hong Kong Institute of Vocational Education (Tsing Yi)  <br>
                Higher Diploma in Computer System and Administration<br>
                Credit
            </div>
        </li>
    </ul>


    <div class="paragraph">Awards</div>

    <ul class="list">
        <li>
            <a class="expand">
                <img src="imgs/profile/3.jpg"/>
            </a>
            <div class="paragraph">
                2011-2012 <br>
                IVE IT Discipline <br>
                Graduation PRoject Show 2012 <br>
                Outstanding Project Award
            </div>
        </li>
        <li>
            <a class="expand">
                <img src="imgs/profile/4.jpg"/>
            </a>
            <div class="paragraph">
                2011-2012 <br>
                Hong Kong Business Software <br>
                Development Competition 2011 - 2012 <br>
                1st Runner-up
            </div>
        </li>
    </ul>
</div>
<div class="preview profile"></div>
<div class="close-preview"><i class="fas fa-times"></i>
    <script>

        $(".expand").click(function () {

            $(".preview , .close-preview").addClass("active");
            $(".preview").html('<img class="profile-pic" src="' + $(this).find('img').attr('src') + '"/>');
        });
    </script>
    <?php
    include "footer.php";
    ?>