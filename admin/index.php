<?php
include_once 'top.php';
include_once 'menu.php';
?>

<!-- <div>
    <div class="container-fluid px-4"> -->
        <!-- <h1>Selamat Datang di halaman Admin</h1> -->

        <?php
        // error_reporting(0);
        // $url = $_GET['url'];
        // membuat logika sederhana untuk mengarahkan url ke file
        // yang mempunyai extension .php
        // routing -> file yang mwngarahkan url

        $url = !isset($_GET['url']) ? 'parta' : $_GET['url'];
        if($url == 'parta.php'){
            include_once 'parta.php';
        }
        else if(!empty($url)){
            include_once ''.$url.'.php';
        }
        else {
            include_once 'parta.php';
        }

        $url = !isset($_GET['url']) ? 'partb' : $_GET['url'];
        if($url == 'partb.php'){
            include_once 'partb.php';
        }
        else if(!empty($url)){
            include_once ''.$url.'.php';
        }
        else {
            include_once 'partb.php';
        }

        $url = !isset($_GET['url']) ? 'partc' : $_GET['url'];
        if($url == 'partc.php'){
            include_once 'partc.php';
        }
        else if(!empty($url)){
            include_once ''.$url.'.php';
        }
        else {
            include_once 'partc.php';
        }

        $url = !isset($_GET['url']) ? 'partc' : $_GET['url'];
        if($url == 'data.php'){
            include_once 'data.php';
        }
        else if(!empty($url)){
            include_once ''.$url.'.php';
        }
        else {
            include_once 'data.php';
        }
        ?>
    <!-- </div>
</div> -->

<?php
include_once 'bottom.php';
?>