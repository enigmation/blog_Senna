<?php
require_once 'header.php';
?>


<?php
$page = $_GET['page'];
require_once 'functions.php';
switch ($page) {
    case 'home':
        require_once 'home.php';
        break;

    case 'about':
        require_once 'about.php';
        break;

    case 'detail':
        require_once 'detail.php';
        break;

    case 'ulasan':
        require_once 'ulasan.php';
        break;

    default:
        require_once 'error.php';
        break;
}
?>

<<?php
    require_once 'footer.php';
    ?>