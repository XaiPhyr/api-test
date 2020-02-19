<?php

class ManageController
{
    function add_product()
    {
        include("views/header.php");
        include("views/manage/add-product.php");
        include("views/footer.php");
    }
}

$manage = new ManageController;
