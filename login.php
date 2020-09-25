<?php 

$host="localhost";
$user="root";
$password="";
$db="user";
$db = new Mysqli;

$db->connect('localhost','root','','user');

session_start();

     
if(isset($_POST['username'])){
    
    
     $_SESSION['uname']=$_POST['username'];
    $password=$_POST['password'];
    
    if($_SESSION['uname'] and $password){
    $password=md5($password);
    
    
    $sql="select * from login where username='".$_SESSION['uname']."'AND Password='".$password."' limit 1";
    
    $result=$db->query($sql);
    
    if(mysqli_num_rows($result)==1){
        header('location:welcome.php');
        
        exit();
    }
    else{
        
        echo '<script>alert("Incorrect username or password")</script>';
    }
    
}
else{
        echo '<script>alert("Something Wrong")</script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
	<div class="container">
	
		<form method='POST' action='#'>
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" name="submit" value="LOGIN" class="btn-login" />
			<input name="submit" value="SIGNUP" class="btn-login" onClick="document.location.href='regdup.php'"/>
		</form>
	</div>
</body>
</html>