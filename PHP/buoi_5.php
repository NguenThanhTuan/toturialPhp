<?php 
	echo "<h3>Unlink</h3>";
	// Xóa file delete.php
	if (@unlink("delete.php"))
	{
		echo "Xóa thành công";
	}
	else
	{
		echo "Xóa thất bại";
	}

	echo "<h3>Unset</h3>";
	// Dùng để xóa biến, , loại bỏ một phần tử trong mảng
	$name = "Tuấn";
	unset($name);
	echo $name;
	// Xóa phần tử trong mảng
	$number = Array(1, 2, 8, 3, 7, 9);
	echo "<pre>";
	print_r($number);
	unset($number[1]);
	echo "<br>Sau khi đã unset ";
	echo "<pre>";
	print_r($number);
	// Xóa nhiều phần tử
	unset($number[1], $number[4]);
	echo "<br>Unset nhiều phần tử ";
	echo "<pre>";
	print_r($number);

	// include + require + include_once + require_once
	/*
		Cách dùng:
			- Lệnh require, require_once, include và include_once dùng để import một file PHP A vào một file PHP B để file PHP B có thể sử dụng được các thư viện trong file PHP A
		Khác nhau:
			- Include: Nếu include hai lần thì sẽ KHÔNG xuất hiện lỗi mà chỉ có một cảnh báo
			- Require: Nếu require hai lần cùng một file thì lập tức sẽ bị thông báo lỗi và dừng chương trình
			- Include_once, Require_once: Chỉ import đúng một lần, khi sử dụng hai lệnh require_once cùng một file thì ở lệnh require_once thứ hai nó sẽ thấy là đã xử lý rồi nên nó sẽ không thực thi nữa. Chương trình vẫn hoạt động bình thường.
	*/
	
	echo "<h3>include + require + include_once + require_once</h3>";
	include('inc.php');

	if(isset($_POST['submit']))
	{
		// Chuyển hướng tới fb
		header('Location: https://www.facebook.com/');
	}

 ?>
 <h3>Redirect tới Facebook</h3>
<form action="" method="POST">
	<input type="submit" name="submit">
</form>

<!-- 
	Kết quả: 
	- Sử dụng hàm unlink để xóa file. Unset để xóa biến, xóa phần tử trong mảng
	- Phân biệt được: include, require, include_once, require_once
	- Chuyển hướng trang web

 -->