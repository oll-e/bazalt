<?php

use Framework\CMS\Http\Request;

include 'bootstrap.php';
/*
Framework\CMS\Bootstrap::start(
    new App\Thumb\Application([
        'request' => new Request()
    ])
);*/

if (!isset($_GET['file'])) {
    header('HTTP/1.0 404 Not Found');
    exit('Not found');
}

class Operations extends \Bazalt\Thumbs\Operations
{
    public function watermark(\Imagine\Image\ImageInterface $image, $options, $allOptions)
    {
        $imagine = new \Imagine\Gd\Imagine();
        $wm = $imagine->open(__DIR__ . '/images/watermark.png');

        $size = $image->getSize();
        $wmSize = $wm->getSize();
        list($x, $y) = explode(' ', $options);
        if (!is_numeric($x)) {
            $x = ($x == 'right') ? ($size->getWidth() - $wmSize->getWidth()) : 0;
            if ($x < 0) $x = 0;
        }
        if (!is_numeric($y)) {
            $y = ($y == 'bottom') ? ($size->getHeight() - $wmSize->getHeight()) : 0;
            if ($y < 0) $y = 0;
        }

        $point = new \Imagine\Image\Point($x, $y);
        return $image->paste($wm, $point);
    }

    public function grayscale(\Imagine\Image\ImageInterface $image, $options, $allOptions)
    {
        $image->effects()->grayscale();
        return $image;
    }

    public function sepia(\Imagine\Image\ImageInterface $image, $options, $allOptions)
    {
        $image->effects()
              ->grayscale()
              ->colorize(new \Imagine\Image\Color('#643200'));
        return $image;
    }
}

$thumb = \Bazalt\Thumbs\Image::generateThumb(__DIR__ . $_GET['file'], new Operations());
if ($thumb) {
    switch (pathinfo($thumb, PATHINFO_EXTENSION)) {
    case 'png':
        header('Content-Type: image/png');
        break;
    case 'jpg':
        header('Content-Type: image/jpeg');
        break; 
    }
    readfile($thumb);
    exit;
}