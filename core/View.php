<?php
namespace core;

class View
{
    public $content_view;

    function generate($content_view, $template_view, $data = null)
    {
        include_once 'app/Views/' . $template_view;
        $this->content_view = include_once 'app/Views/' . $content_view;
        
    }

    public function generate_img($file)
    {
        
        $img = imagecreatefrompng($file);
        $info   = getimagesize($file);
        $width  = $info[0];
        $height = $info[1];
        $type   = $info[2];
        switch ($type) {
            case 2:
                $img = imageCreateFromJpeg($file);
                break;
            case 3:
                $img = imageCreateFromPng($file);
                break;
        }
        if ($_POST['imgStyle'] === 'GRAYSCALE') {
            imagefilter($img, IMG_FILTER_GRAYSCALE);
        } elseif ($_POST['imgStyle'] === 'NEGATE') {
            imagefilter($img, IMG_FILTER_NEGATE);
        } elseif ($_POST['imgStyle'] === 'EMBOSS)') {
            imagefilter($img, IMG_FILTER_EMBOSS);
        } elseif  ($_POST['imgStyle'] === 'GAUSSIAN_BLUR')  {
            imagefilter($img, IMG_FILTER_GAUSSIAN_BLUR);
        } elseif ($_POST['imgStyle'] === 'MEAN_REMOVAL') {
            imagefilter($img, IMG_FILTER_MEAN_REMOVAL);
        } elseif ($_POST['imgStyle'] === 'SMOOTH')  {
            imagefilter($img, IMG_FILTER_SMOOTH, -6);
        }
         
        switch ($type) {
            case 2:
                header('Content-Type: image/jpeg');
                imageJpeg($img, null, 100);
                break;
            case 3:
                header('Content-Type: image/x-png');
                imagePng($img);
                break;
        }
    }
}
