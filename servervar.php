
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
		}
		.scriptColour {
			color: maroon;	
		}
		.outputColour {
			color: blue;	
		}
	</style>
	
<?php 
/*
//						TEST server vars
//
*/ 


	displayServerVar("DOCUMENT_ROOT");
	displayServerVar("SERVER_ADDR");
	displayServerVar("SERVER_NAME");
	displayServerVar("HTTP_HOST");
	
	displayServerVar("REMOTE_ADDR");
	
	displayServerVar("SERVER_PORT");
	


echo '<a href="https://www.mysqltutorial.org/mysql-stored-function/">Test LIVE server</a>';
	
	function displayServerVar($varString) {
		echo '<span class="scriptColour">$_SERVER[\''.$varString.'\']</span>'; 
		echo ' &nbsp;&nbsp;&nbsp;&nbsp;returns: &nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<span class="outputColour">'.$_SERVER[$varString].'</span><br /><br />'; 
		
	}
	
	


?>