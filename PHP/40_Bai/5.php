<?php 
	//Kiểm tra ip có phải từ Share Internet
	if (!empty($_SERVER['HTTP_CLIENT_IP']))
	{
		$ip_add = $_SERVER['HTTP_CLIENT_IP'];
	}
	//Kiểm tra IP có phải từ Proxy
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
	{
		$ip_add = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else
	{
		$ip_add = $_SERVER['REMOTE_ADDR'];
	}
	echo "Địa chỉ IP Client là: $ip_add";

 ?>