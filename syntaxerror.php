<?php
	
//		File in DEMO folder:              errorTesting.php
echo '<h2>Error Testing:</h2>';
echo '<h4>Syntax Errors:</h4>';

$a = 8 x 5;
echo "8 x 5 = ".$a




echo '<h2>--------- END --------</h2>';
echo '<h4>Semantic Error:</h4>';

for ($i = 5; $i < 2; $i++) {
	echo $i;
}
echo "<br />";
echo '$i = '.$i."<br />";

echo "<br />";


?>