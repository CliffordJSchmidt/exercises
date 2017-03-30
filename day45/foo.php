<?php
/*
// image text 

header('Content-Type:image/png');
$im = imagecreate(310, 50); 
$background_color = imagecolorallocate($im, 0, 0, 200);
$text_color = imagecolorallocate($im, 14, 233, 91);
imagestring($im, 5, 5,5, 'A Simple Text String', $text_color);
imagepng($im);


// use for this would be to use an insert an image when you can not use html
// use to insert product photo with text in it


/*
//Images:lines
header('Content-Type: image/png');
$im = imagecreate(310, 500);
$background_color = imagecolorallocate($im, 0, 0, 0);
$color = imagecolorallocate($im, 14, 233, 91);
imageline($im, 0, 0, 100, 100, $color);
imageline($im, 100, 100, 200, 100, $color);
imageline($im, 200, 100, 250, 150, $color);
imageline($im, 250, 150, 300, 50, $color);
imageline($im);
*/



//working with single photos
/*
header('Content-Type: image/jpeg');
$size = getimagesize('thailand.jpg');
var_dump($size);
echo $size[0] . 'x' . $size[1];

$original = imagecreatefromjpeg('thailand.jpg'); // assign variable to original photo
imagejpeg($original); function that outputs the image to browser


$ratio = $size[0] / $size[1]; ratio for sizing photos

imagecreatetruecolor(width, height)
$new = imagecreatetruecolor(200, 200 / $ratio);
imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h);
imagecopyresampled($new, $original, 0, 0, 0, 0, 200, 200/ $ratio, $size[0], $size[1]);
imagejpeg($new);
*/


/*
header('Content-Type: image/jpeg');
$size = getimagesize('thailand.jpg');
$original = imagecreatefromjpeg('thailand.jpg');
$new = imagecreatetruecolor(200, 200 / $ratio);
imagecopyresampled($new, $original, 0, 0, 0, 0, 200, 200/ $ratio, $size[0], $size[1]);
imagejpeg($new);
*/



/*
// changing sizes when user uploading the images via forms - creates new smaller file

$size = getimagesize('thailand.jpg');
$original = imagecreatefromjpeg('thailand.jpg');
$ratio = $size[0] / $size[1]; //ratio for sizing photos
$new = imagecreatetruecolor(200, 200 / $ratio);
imagecopyresampled($new, $original, 0, 0, 0, 0, 200, 200/ $ratio, $size[0], $size[1]);
imagejpeg($new, 'thailand-small.jpg'); // saves the photo file as a smaller file
*/




// adding a text string to an image

header('Content-Type: image/jpeg');  // needs header tag on page to display image
function resize ($filename){

    $size = getimagesize('thailand.jpg');
    $original = imagecreatefromjpeg('thailand.jpg'); 
    $ratio = $size[0] / $size[1]; //ratio for sizing photos
    $new = imagecreatetruecolor(200, 200 / $ratio); 
    imagecopyresampled($new, $original, 0, 0, 0, 0, 200, 200/ $ratio, $size[0], $size[1]);

    $text_color=imagecolorallocate($new, 14, 233, 91);
    imagestring($new, 5, 5, 5);

    imagejpeg($new, 'small-' . '$filename');
    imagejpeg($new);

}

// resize('filename.jpg');  // call function and use image you want resized 