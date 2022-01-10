<?php
	$host = '140.130.89.143';
	$dbuser = 'bmeusera';
	$dbpassword = 'ABME7606';
	$dbname = 'test';
	$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
	
	if($link){
		mysqli_query($link,'SET NAMES utf8');
		echo "connect";
	}
	else{
		echo "不正確連接</br>" . mysqli_connect_error();
	}
?>