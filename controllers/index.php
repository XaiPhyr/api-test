<?php

class IndexController
{

    function webpage($page)
    {
        include("views/header.php");
        include("views/dashboard/" . $page);
        include("views/footer.php");
    }

    function index()
    {
        $this->webpage('index.php');
    }

    function preview()
    {
        $this->webpage('preview.php');
    }
}

$index = new IndexController;
