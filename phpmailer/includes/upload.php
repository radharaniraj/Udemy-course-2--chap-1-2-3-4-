<?php
if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "images/".$_FILES["myfile"]["name"])){
    echo "Uploaded Successfully";
    $name=$_POST['username'];
    echo " welcome " .  $name;
}
else{
    echo "Failed";
}

?>