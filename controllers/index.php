<?php

class IndexController
{
    function index()
    {
        include("views/header.php");
        include("views/dashboard/index.php");
        include("views/footer.php");
    }
}

$index = new IndexController;
