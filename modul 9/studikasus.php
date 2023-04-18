<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<script type="text/javascript">
		function validateForm() {
			var id = document.forms["loginForm"]["id"].value;
			var password = document.forms["loginForm"]["password"].value;
			if (id == "" || password == "") {
				alert("ID/Username dan Password tidak boleh kosong.");
				if (id == "") {
					document.forms["loginForm"]["id"].focus();
				} else {
					document.forms["loginForm"]["password"].focus();
				}
				return false;
			} else if (!/^[a-zA-Z]+$/.test(id) || !/^[a-zA-Z]+$/.test(password)) {
				alert("ID/Username dan Password harus huruf.");
				return false;
			}
		}
	</script>
</head>
<body>
	<form name="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm();">
		<label for="id">ID/Username:</label>
		<input type="text" id="id" name="id"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = $_POST["id"];
		$password = $_POST["password"];
		if (!is_string($id) || !is_string($password)) {
			echo "Data yang dimasukkan harus berupa string.";
		} else if ($id == "admin" && $password == "123456") {
			echo "<p>Selamat datang, $id!</p>";
		} else {
			echo "<p>Login gagal. Silahkan coba lagi.</p>";
		}
	}
	?>
</body>
</html>