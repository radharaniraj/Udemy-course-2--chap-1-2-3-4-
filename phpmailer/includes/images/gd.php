<?php
$save_location = "images/project.jpg";
$x=400;
$y=320;
$image=imagecreate($x,$y);
$white = imagecolorallocate($image,23,67,89);
imagejpeg($image,$save_location);

?>
<img src="<?php echo $save_location?>">