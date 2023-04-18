<!DOCTYPE html>
<html>
<head>
	<!-- Merupakan kelas Bootstraps -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous">
	<style>
		.edittipis {
			font-family: Trebuchet MS;
			font-size: 20px;
		}
	</style>

	<title>Login Form</title>
	<!-- Merupakan Script Javascript -->
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
	<div class="container edittipis text-center col-12 col-md8 col-lg-3">
		<div class="card" style="margin-top: 15%; margin-bottom: 60px;">
			<h3 style="margin-top: 18px; margin-bottom: 15px;">SIGN IN</h3>
		<form name="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm();">
		<label for="id">ID/Username:</label>
		<input class="form-control" type="text" id="id" name="id" placeholder="masukkan id/username"><br><br>
		<label for="password">Password:</label>
		<input class="form-control" type="password" id="password" name="password" placeholder="masukkan password"><br><br>
		<input type="submit" value="Login" style="margin-top: 20px; margin-bottom: 30px;">
		</form> 
		</div>
	</div>
	
	<?php
	if (isset($_POST["nama"]) || isset($_POST['password'])) {
		
	}
		
	
	?>
</body>
</html>