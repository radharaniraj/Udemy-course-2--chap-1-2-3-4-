<?php


{ 	
		include('dbConnection.php'); 
		$dbSuccess = false;
		$dbConnected = mysql_connect($db['hostname'],$db['username'],$db['password']);
		
		if ($dbConnected) {		
			$dbSelected = mysql_select_db($db['database'],$dbConnected);
			if ($dbSelected) {
				$dbSuccess = true;
			} 	
		}
}

{		//	drop & create table
		$dropTestTable = "DROP TABLE test";
			if (mysql_query($dropTestTable))  {	
				echo 'Table Dropped.<br /><br />';
			} else {
				echo '<span style="color:red; ">FAILED to DROP table.</span><br /><br />';
				echo mysql_error();
			}
	
		$createTestTable = 'CREATE TABLE alphacrm.test (
									ID INT NOT NULL  AUTO_INCREMENT PRIMARY KEY ,
									testitem VARCHAR( 4 ) NOT NULL, 
									UNIQUE (testitem)
								)';		
											
			if (mysql_query($createTestTable))  {	
				echo 'Table Added.<br /><br />';
			} else {
				echo '<span style="color:red; ">FAILED to Add table.</span><br /><br />';
				echo mysql_error();
			}
}

?>