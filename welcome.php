<?php
session_start();
if(array_key_exists('uname',$_SESSION)){
echo "welcome"." ". $_SESSION['uname'];
}
else{
    header('location:login.php');
}


if(isset($_REQUEST['logout'])){
    session_unset();
    session_destroy;
    echo "<script> location.href = 'login.php'; </script>";

}

?>
<!DOCTYPE html>
<html>

<head>
    <title> doc</title>
</head>

<body>
    <form action="" method="POST">
        <input type="submit" value="Logout" name="logout">
    </form>

</body>

</html>