<?php

	include_once('db.php');
	
	include_once('adminnavbar.php');
	
	
	$sino=$_REQUEST['sino'];
	
	$sql="delete from notifications where slno=$sino";
	
	
	
	$res=execute( $sql );
	
	echo "<center><h2>Ok Deleted</h2><br/></center>";
	
	


?>