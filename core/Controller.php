<?php
namespace Core;

use core\View;


class Controller {

    public $view;

    function __construct()
    {
        $this->view = new View;

    }
}