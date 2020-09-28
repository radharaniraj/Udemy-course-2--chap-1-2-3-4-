<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("hello.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("hello.txt"));

?>
<?php
$myfile = fopen("hello.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>
<?php
$myfile = fopen("hello.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
<?php
$myfile = fopen("file.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>