<?php
$ROOT = "/PB";
include('header.php');
require_once 'config/connect.php';
if (empty($_GET)) {
    include('menu.php');
    include('main.php');

    include('footer.php');
} else if (isset($_GET['id1'])) {


        include('portfolio/menuPortfolio.php');
        include('portfolio/index.php');


}

?>