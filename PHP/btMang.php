<?php 
	$mang = array(1, 32, 5, 16, 9, 99, 150);
	function tanDan($mang)
	{
		$count = count($mang);
		for($i = 0; $i < $count; $i++)
		{
			for($j = $i+1; $j < $count; $j++)
			{
				if ($mang[$i] > $mang[$j]) 
				{
					$temp = $mang[$j];
					$mang[$j] = $mang[$i];
					$mang[$i] = $temp; 
				}
			}
		}
		return $mang;
	}
	function giamDan($mang)
	{
		$count = count($mang);
		for($i = 0; $i < $count; $i++)
		{
			for($j = $i+1; $j < $count; $j++)
			{
				if ($mang[$i] < $mang[$j]) 
				{
					$temp = $mang[$j];
					$mang[$j] = $mang[$i];
					$mang[$i] = $temp; 
				}
			}
		}
		return $mang;
	}
	function hienThi($mang)
	{
		$count = count($mang);
		for($i = 0; $i < $count; $i++)
		{
			echo $mang[$i]." ";
		}
	}
	echo "<h3>Sắp xếp tăng dần</h3>";
	$kq = tanDan($mang);
	hienThi($kq);
	echo "<h3>Sắp xếp giảm dần</h3>";
	$kq = giamDan($mang);
	hienThi($kq);
	
	
 ?>