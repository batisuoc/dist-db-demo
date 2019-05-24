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
	<div id="student-regis" class="modal">
		<span onclick="document.getElementById('student-regis').style.display='none'" class="close" title="Close Modal">&times;</span>
		<form class="modal-content" action="register_action.php" method="post">
			<div class="container">
				<h1>Đăng kí tài khoản sinh viên</h1>
				<p>Vui lòng điềm đầy đủ thông tin</p>
				<hr>
				<label for="lastname"><b>Họ</b></label>
				<input type="text" placeholder="Nhập họ" name="lastname" required>

				<label for="firstname"><b>Tên</b></label>
				<input type="text" placeholder="Nhập tên" name="firstname" required>

				<label for="psw"><b>Mật khẩu</b></label>
				<input type="password" placeholder="Nhập mật khẩu" name="psw" required>

				<label for="dob"><b>Ngày sinh</b></label>
				<input type="date" placeholder="Nhập ngày sinh" name="dob" required>

				<label for="address"><b>Địa chỉ</b></label>
				<input type="text" placeholder="Nhập địa chỉ" name="address" required>

				<label for="lop"><b>Lớp</b></label>
				<select name="lop" required>
					<option value="1"></option>
				</select>

				<div class="clearfix">
					<button type="button" onclick="document.getElementById('student-regis').style.display='none'" class="cancelbtn">Hủy bỏ</button>
					<button type="submit" class="signupbtn" name="regisStudent">Đăng kí</button>
				</div>
			</div>
		</form>
	</div>
	<!-- End Student register form -->

	<!-- Teacher register form -->
	<div id="teacher-regis" class="modal">
		<span onclick="document.getElementById('teacher-regis').style.display='none'" class="close" title="Close Modal">&times;</span>
		<form class="modal-content" action="register_action.php" method="post">
			<div class="container">
				<h1>Đăng kí tài khoản giáo viên</h1>
				<p>Vui lòng điềm đầy đủ thông tin</p>
				<hr>
				<label for="lastname"><b>Họ</b></label>
				<input type="text" placeholder="Nhập họ" name="lastname" required>

				<label for="firstname"><b>Tên</b></label>
				<input type="text" placeholder="Nhập tên" name="firstname" required>

				<label for="psw"><b>Mật khẩu</b></label>
				<input type="password" placeholder="Nhập mật khẩu" name="psw" required>

				<label for="hocvi"><b>Học vị</b></label>
				<input type="text" placeholder="Nhập học vị" name="hocvi" required>

				<label for="khoa"><b>Khoa</b></label>
				<select name="khoa" required>
					<option value="1"></option>
				</select>

				<div class="clearfix">
					<button type="button" onclick="document.getElementById('teacher-regis').style.display='none'" class="cancelbtn">Hủy bỏ</button>
					<button type="submit" class="signupbtn" name="regisTeacher">Đăng kí</button>
				</div>
			</div>
		</form>
	</div>
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