<?php $listLop = $regisCtrl->getListofLop(); ?>
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
				<?php while ($row = sqlsrv_fetch_array($listLop, SQLSRV_FETCH_ASSOC)) { ?>
					<option value="<?= $row['MALOP'] ?>"><?= $row['TENLOP'] ?></option>
				<?php } ?>
			</select>

			<div class="clearfix">
				<button type="button" onclick="document.getElementById('student-regis').style.display='none'" class="cancelbtn">Hủy bỏ</button>
				<button type="submit" class="signupbtn" name="regisStudent">Đăng kí</button>
			</div>
		</div>
	</form>
</div>