<?php

switch ($_GET['page']) {
    default:
        include("controllers/index.php");
        $index->index();
        break;

    case 'add-product':
        include("controllers/manage.php");
        $manage->add_product();
        break;
}
