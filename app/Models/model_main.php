<?php

namespace app\Models;

use core\Model;

class Model_Main extends Model
{
    public $uploaded_file;
    function __construct()
    {
        $uploadDir = 'uploads';
        $this->uploaded_file = $this->get_uploaded_file($uploadDir);
    }
}
