<?php

include 'bootstrap.php';

using('Framework.Vendors.lessphp');

use Framework\CMS as CMS;

$file = SITE_DIR . $_SERVER['PATH_INFO'];
if (!is_file($file)) {
    exit();
}
if (pathinfo($file, PATHINFO_EXTENSION) !== 'less'){ 
    readfile($file);
    exit;
}

header("Content-type: text/css");
$less = new lessc();
/*$less->setVariables(array(
  "color" => "red",
  "base" => "960px"
));
*/
$content = $less->compileFile($file);
echo $content;