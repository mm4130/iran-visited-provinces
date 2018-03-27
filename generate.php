<?php

function gd_filter_image($provinces)
{
    list($width, $height) = getimagesize('map.jpg');
    $im = imagecreatetruecolor($width, $height);
    $src = imagecreatefromjpeg('map.jpg');
    imagecopyresampled($im, $src, 0, 0, 0, 0, $width, $height, $width, $height);
    foreach ($provinces as $province) {
        if (file_exists('provinces/'.$province.'.png')) {
            $im = gd_apply_overlay($im, $province);
        }
    }
    header('Content-type: image/jpeg');
    imagejpeg($im, null, 100);
    imagedestroy($im);
    imagedestroy($src);
}

function gd_apply_overlay($im, $type)
{
    $width = imagesx($im);
    $height = imagesy($im);
    $filter = imagecreatetruecolor($width, $height);
    imagealphablending($filter, false);
    imagesavealpha($filter, true);
    $transparent = imagecolorallocatealpha($filter, 255, 255, 255, 127);
    imagefilledrectangle($filter, 0, 0, $width, $height, $transparent);
    $png = imagecreatefrompng('provinces/'.$type.'.png');
    imagecopyresampled($filter, $png, 0, 0, 0, 0, $width, $height, $width, $height);
    $comp = imagecreatetruecolor($width, $height);
    imagecopy($comp, $im, 0, 0, 0, 0, $width, $height);
    imagecopy($comp, $filter, 0, 0, 0, 0, $width, $height);
    imagecopymerge($im, $comp, 0, 0, 0, 0, $width, $height, 100);
    imagedestroy($comp);

    return $im;
}

gd_filter_image(array_keys($_GET));
