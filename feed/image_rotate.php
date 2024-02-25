<?php

// $source = imagecreatefromjpeg(STDIN);
$source = imagecreatefromjpeg("/tmp/input");

$rotated = imagerotate($source, 90, 0);

imagejpeg($rotated, 'rotated_image.jpg');

imagedestroy($source);
imagedestroy($rotated);
?>