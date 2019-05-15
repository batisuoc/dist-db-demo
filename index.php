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
	<div class="wrapper fadeInDown">
		<div id="formContent">
			<!-- Tabs Titles -->

			<!-- Icon -->
			<div class="fadeIn first">
				<img class="resize" src="img/TDT_logo.png" id="icon" alt="User Icon" />
			</div>

			<!-- Login Form -->
			<form>
				<input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
				<input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
				<input type="submit" class="fadeIn fourth" value="Log In">
			</form>

			<!-- Remind Passowrd -->
			<div id="formFooter">
				<p class="text">Have no account</p>
				<!-- <a class="underlineHover" href="#">Sign in</a> -->
				<button class="underlineHover" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
			</div>
		</div>
	</div>
	<!-- / End Sign in Form -->

	<!-- Student register form -->
	<div id="id01" class="modal">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		<form class="modal-content" action="/action_page.php">
			<div class="container">
				<h1>Đăng kí tài khoản</h1>
				<p>Vui lòng điềm đầy đủ thông tin</p>
				<hr>
				<label for="lastname"><b>Họ</b></label>
				<input type="text" placeholder="Nhập họ" name="lastname" required>

				<label for="firstname"><b>Tên</b></label>
				<input type="text" placeholder="Nhập tên" name="firstname" required>

				<label for="psw"><b>Mật khẩu</b></label>
				<input type="password" placeholder="Nhập mật khẩu" name="psw" required>

				<label for="dob"><b>Ngày sinh</b></label>
				<input type="text" placeholder="Nhập ngày sinh" name="dob" required>

				<label for="address"><b>Địa chỉ</b></label>
				<input type="text" placeholder="Nhập địa chỉ" name="address" required>

				<label>
					<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
				</label>

				<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

				<div class="clearfix">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					<button type="submit" class="signupbtn">Sign Up</button>
				</div>
			</div>
		</form>
	</div>
	<!-- End Student register form -->

	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</body>
</html>