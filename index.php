<?php

require_once 'controller/RegisterController.php';
$regisCtrl = new RegisterController('TCCN');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<!-- Bootstrap -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<!-- Jquery -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<!-- Sign in form -->
	<div id="login-form" class="wrapper fadeInDown">
		<div id="formContent">
			<!-- Tabs Titles -->

			<!-- Icon -->
			<div class="fadeIn first">
				<img class="resize" src="img/TDT_logo.png" id="icon" alt="User Icon" />
			</div>

			<!-- Login Form -->
			<form>
				<input type="text" id="login" class="fadeIn second" name="login" placeholder="Tên tài khoản">
				<input type="text" id="password" class="fadeIn third" name="login" placeholder="Mật khẩu">
				<input type="submit" class="fadeIn fourth" value="Đăng nhập">
			</form>

			<!-- Remind Passowrd -->
			<div id="formFooter">
				<p class="text">Chưa có tài khoản ?</p>
				<!-- <a class="underlineHover" href="#">Sign in</a> -->
				<button class="underlineHover" onclick="document.getElementById('student-regis').style.display='block'" style="width:auto;">Đăng kí tài khoản sinh viên</button>
				<button class="underlineHover" onclick="document.getElementById('teacher-regis').style.display='block'" style="width:auto;">Đăng kí tài khoản giáo viên</button>
			</div>
		</div>
	</div>
	<!-- / End Sign in Form -->

	<!-- Student register form -->
	<?php require 'student_register_form.php'; ?>
	<!-- End Student register form -->

	<!-- Teacher register form -->
	<?php require 'teacher_register_form.php'; ?>
	<!-- / End Teacher register form -->

	<script>
		// Get the modal
		var modal = document.getElementById('student-regis');
		var modal2 = document.getElementById('teacher-regis');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			} else if(event.target == modal2) {
				modal2.style.display = "none";
			}
		}
	</script>
</body>
</html>