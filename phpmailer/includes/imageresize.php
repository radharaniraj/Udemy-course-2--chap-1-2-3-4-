<html>
    <body>
        <img src="marie.jpg">
        <br>
        <br>
        <?php 
        $input_image = "marie.jpg";
        $output_image="image_out.jpg";
        $width = 400;
        $height = 400;
        $org_info = getimagesize($input_image);
        echo $org_info[3].'<br><br>';
        $resource_org=imagecreatefromjpeg($input_image);
        $scaled=imagescale($resource_org,$width,$height);
        imagejpeg($scaled,$output_image);
        imagedestroy($resource_org);
        
                ?>
                <img src ="image_out.jpg"><br><br>
                <?php
                $scaled_info=getimagesize($output_image);
                echo $scaled_info[3];
                ?>
        </body>
            </html>