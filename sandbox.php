<?php

    //session
    if(isset($_POST['submit'])) {

        //set a cookie for gender
        setcookie('gender', $_POST['gender'], time() + 86400);

        //set a session for name
        session_start();

        $_SESSION['name'] = $_POST['name'];

        // echo $_SESSION['name'];

        header('Location: index.php');

    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>php tuts</title>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
        <select name="gender">
			<option value="male">male</option>
			<option value="female">female</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>