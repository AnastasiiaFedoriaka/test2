<?php 

	if(isset($_POST["submit"])) {
		$login = $_POST['login'];
		$password = $_POST['password'];

		//$sql = "SELECT * FROM users WHERE `username` = `$login` AND `pass` = '$password'";
		$sql = "SELECT * FROM users WHERE `username` = '$login'";
		

		$result = $conn->query($sql);
		//var_dump($conn);
		
		$user = $result->fetch_assoc();
		
		//$password = "admin12345";

		if(password_verify($password, $user['pass'])) {
			//echo("Вы успешно авторизованы");
			setcookie("user", $user['id'], time()+3600*24, "/");
		} else {
			echo("Дані введено не вірно");
		}
		//die();
		//setcookie("user", $user['id'], time()+3600*24, "/");
		
	}
?>

<form method="post">
	<p>
		Login: <br/>
		<input type="text" name="login">
	</p>

	<p>
		Password: <br/>
		<input type="password" name="password">
	</p>

	<p>
		<input type="submit" name="submit" value="Login">
	</p>
</form>