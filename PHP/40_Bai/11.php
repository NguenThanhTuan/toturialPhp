<?php 
	$email = "";
	$erro = "";
	if(isset($_POST['submit']))
	{
		if(empty($_POST['email']))
		{
			$erro = "<span style='color:red;'>Error: Email bắt buộc phải nhập.</span>";
		}
		else
		{
			$email = $_POST['email'];
			$parttern = preg_match("/^[\w]+([-_\.][\w]+)*@([a-z0-9]+([\.-][a-z][0-9]+)*)+\.[a-z]{2,}$/i", $email);
			if(!$parttern)
			{
				$erro = "<span style='color:red;'>Error: Email nhập sai định dạng.</span>";
			}
			else
			{
				$erro = "<span style='color:red;'>Chính xác.</span>";
			}
		}
	}
 ?>
 <form action="" method="POST">
 	<input type="text" name="email"> <?php echo $erro; ?>
 	<br><input type="submit" name="submit">
 </form>