<?php
include("header.php");
?>
<div class="container">
    <div class="paragraph">I am <h1>Chu Bao</h1></div>
    <div class="introduction">
        <div class="paragraph">I have been working as a Web Programmer since 2013 and become Senior Web Programmer in 2016.</div>
        <div class="paragraph">My main programming languages are 
            <h2 class="programming" id='php'>PHP</h2>, 
            <h2 class="programming" id='jquery'>jQuery</h2> with 
            <h2 class="programming" id='html'>HTML</h2> and 
            <h2 class="programming" id='css'>CSS</h2>.
        </div>
    </div>
    <div class="paragraph">
        My main job duties are building customize <h3 class="project-type" tid="cms">CMS</h3> (Backend Programming) for our clients. 

    </div>
    <div class="paragraph">
        Sometimes, i will build the front-end of a website too.
    </div>
    <div class="paragraph">I worked as a team leader of programming team, i need to share my experience and provide solutions to junior programmers.</div>
    <div class="paragraph">Also, i need to meeting with our clients, including foreigners.</div>
    <div class="paragraph">
        I am experienced in developing <h3 class="project-type" tid="opencart">Opencart</h3>, which is a shopping cart framework.
    </div>
    <div class="paragraph">
        During 2017, me and my team help <h4 class="project" pid="7">Clarins-HK</h4> to manage their website, including Contents Update, Promotion Update and Products Update.
        and they are using <h3 class="project-type" tid="demandware">Demandware</h3> as their CMS.
    </div>
</div>

<div class="container">

    <div class="paragraph">The website below are my feature projects:</div>

    <ul class="list">
        <li>
            <a  pid="1">Black Media Group</a>
            <a class="link" href="http://bmg.com.hk/" target="_blank"><i class="fas fa-arrow-right" ></i></a>

            <div class="type">
                <span >CMS</span>
            </div>
        </li>
        <li>
            <a  pid="2">Nature Evolution</a>
            <a class="link" href="http://natureevolution.com.hk/" target="_blank"><i class="fas fa-arrow-right" ></i></a>
            <div class="type">
                <span >CMS</span>, 
                <span >Customized Shopping Cart System</span>
            </div>
        </li>
        <li>
            <a  pid="3">Esmée Bo.</a>
            <a class="link" href="http://esmeebo.com/" target="_blank"><i class="fas fa-arrow-right" ></i></a>

            <div class="type">
                <span >Opencart</span>, 
                <span >Customized Function</span>
            </div>
        </li>
        <li>
            <a  pid="4">DCH Motor Leasing</a>
            <a class="link" href="http://dchml.com.hk/" target="_blank"><i class="fas fa-arrow-right" ></i></a>

            <div class="type">
                <span  >CMS</span>, 
                <span >Car Rental System</span>
            </div>
        </li>
        <li>
            <a  pid="5">Pursuits HK</a>
            <a class="link" href="http://pursuits.hk/" target="_blank"><i class="fas fa-arrow-right" ></i></a>
            <div class="type">

                <span>Front-end</span>,
                <span >CMS</span>
            </div>
        </li>
        <li>
            <a  pid="6" >Amritagroup</a>
            <a class="link" href="http://amritagroup.com.hk/" target="_blank"><i class="fas fa-arrow-right" ></i></a>
            <div class="type">
                <span >Front-end</span>,
                <span >CMS</span>
            </div>
        </li>
    </ul>

</div>

<div class="container">

    <div class="paragraph" id="more-detail">for any enquiry, you can contact <a href="mailto:chubao0208@gmail.com">me</a>, 
        or click on the menu at top-right corner to find mroe information <i class="fas fa-arrow-right" data-fa-transform="rotate-325"></i>
    </div>
</div>
<div class="close-preview"><i class="fas fa-times"></i>

</div>
<div class="preview"></div>
<div class='programming-preview'></div>

<script>
    $(".list li a, .project").click(function () {

        $(".preview , .close-preview").addClass("active");

        $.ajax({
            type: 'GET',
            url: 'function/projects.php',
            data: {project_id: $(this).attr('pid')},
            success: function (data) {
                $(".preview").html(data);

            }
        });
    });
    $(".project-type").click(function () {

        $(".preview , .close-preview").addClass("active");

        $.ajax({
            type: 'GET',
            url: 'function/project_type.php',
            data: {type_id: $(this).attr('tid')},
            success: function (data) {
                $(".preview").html(data);

            }
        });
    });
</script>
<?php
include "footer.php";
?>