<?php 

$host="localhost";
$user="root";
$password="";
$db="user";
$db = new Mysqli;

$db->connect('localhost','root','','user');

session_start();
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    if($uname and $password){
    $password=md5($password);
    
    
    $sql="select * from login where username='".$uname."'AND Password='".$password."' limit 1";
    
    $result=$db->query($sql);
    
    if(mysqli_num_rows($result)==1){
        echo '<script>alert("Already Registered")</script>';
        
        exit();
    }
    else{
        
        $sql="INSERT INTO login(username,password) VALUES ('$uname','$password')";
        $val=$db->query($sql);
    if($val){
        header('location: login.php');
    }
    }
}  
echo '<script>alert("Something Wrong")</script>';
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
			<input type="submit" name="submit" value="signup" class="btn-login"  />
			
		</form>
	</div>
</body>
</html>