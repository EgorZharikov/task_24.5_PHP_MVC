<?php
use core\Controller;
use app\Models\Model_Main;

class Controller_Main extends Controller
{
    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }

    function action_img()
    {
        $model_img = new Model_Main;
        $uploaded_file = $model_img->uploaded_file;
        $this->view->generate_img($uploaded_file);
    }

}
