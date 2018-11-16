<?php
include_once 'db.php';


include_once 'components/header.php';
$page = isset($_GET['page']) ? $_GET['page'] : 0;
switch ($page) {
    case '2':
        include_once 'components/page2.php';
        break;
    case '3':
        include_once 'components/page3.php';
        break;
    default:
        include_once 'components/page1.php';
        break;
}

include_once 'components/footer.php';