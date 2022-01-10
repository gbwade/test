<?php
	require_once 'dbconnect.php';
?>
<h3>sql查詢結果</h3>
<?php
	$datas = array();
	$sql = "SELECT `one`,`two` FROM `php_test`";
	$result = mysqli_query($link,$sql);
	
	if ($result)
	{
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$datas[] = $row;
			}
		}
		mysqli_free_result($result);
	}
	else
	{
		echo "{$sql} 錯誤訊息:" . mysqli_error($link);
	}
	if(!empty($result))
	{
		print_r($datas);
	}
	else
	{
		echo "查無資料";
	}
?>
