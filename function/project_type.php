<?php
$project_type = $_GET['type_id'];
if ($project_type == "cms") {
    ?>
    <ul> 
        <li><img src="project/cms/3.jpg"/></li>
        <li><img src="project/cms/4.jpg"/></li>
        <li><img src="project/cms/5.jpg"/></li>
        <li><img src="project/cms/6.jpg"/></li>
        <li><img src="project/cms/7.jpg"/></li>
    </ul>
    <?php
}
if ($project_type == "opencart") {
    ?>
    <ul> 
        <li><img src="project/opencart/1.jpg"/></li>
        <li><img src="project/opencart/2.jpg"/></li>
        <li><img src="project/opencart/3.jpg"/></li>
        <li><img src="project/opencart/4.jpg"/></li>
    </ul>
    <?php
}
if ($project_type == "demandware") {
    ?>
    <ul> 
        <li><img src="project/demandware/1.jpg"/></li>
        <li><img src="project/demandware/2.jpg"/></li>
    </ul>
    <?php
}
?>