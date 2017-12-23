<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <form action="" method="POST">
        <h3>Please input your name:</h3>
        <input type="text" name="name">
        <input type="submit" name="submit" value="Submit name">
    </form>
    <?php 
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            echo "Tên tôi là: ".$name;
        }
    ?>
</body>
</html>
