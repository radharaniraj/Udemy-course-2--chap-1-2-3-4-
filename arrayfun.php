<!DOCTYPE html>
<html>
<body>

<?php
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
echo "<br>";
?>
<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
echo "<br>";
?>
<?php
$cars=array("Volvo","BMW","Toyota");
sort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }
   echo "<br>";
?>
<?php
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));
 echo "<br>";
?>
<?php
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
 echo "<br>";
?>
<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
 echo "<br>";
?>

</body>
</html>
