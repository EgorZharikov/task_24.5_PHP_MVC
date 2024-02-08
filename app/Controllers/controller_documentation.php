<?php

use core\Controller;

class Controller_Documentation extends Controller
{
    function action_index()
    {
        $this->view->generate('documentation_view.php', 'template_view.php');
    }
}
