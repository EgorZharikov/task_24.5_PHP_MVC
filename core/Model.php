<?php
namespace core;
class Model {

    function get_uploaded_file($uploadDir)
    {
        if (isset($_FILES['files']) &&  $_FILES['files']['error'][0] === 0) {
            $originalFileName = $_FILES['files']['name'][0];
            $savePath = $uploadDir . '/'. $originalFileName;
            $tmpName = $_FILES['files']['tmp_name'][0];
            move_uploaded_file($tmpName, $savePath);
            return $savePath;
        } else {
            echo 'При загрузке файла произошла ошибка#' . $_FILES['files']['error'][0];
        }
    }

}