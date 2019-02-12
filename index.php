<?php
date_default_timezone_set('Europe/Paris');
include "./includes/header.php";

include "./includes/footer.php";


if (isset($_GET['page'])) {

    $page = $_GET['page'];

}
else {
    $page = "accueil";}
$page = "./includes/" .$page . ".php";
include $page;

include "./includes/footer.php";
