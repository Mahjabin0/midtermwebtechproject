<?php

	$dept=$_GET['dept'];

	$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select name from nurse where dept='{$dept}'";
			$result = mysqli_query($con, $sql);


$data="<select name="; $data .="selectednurse";$data .=" id=";$data .="selectednurse";$data .=">
		<option selected=";$data .="selected";$data .=">Choose One</option>";

		while($row=mysqli_fetch_assoc($result))
		{
			$data .="<option value=";$data .=$row['name'];$data .=" onclick=f2()>{$row['name']}</option>";
		}
	$data .="</select>";

	echo $data;



?>

