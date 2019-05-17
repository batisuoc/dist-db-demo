<?php $listKhoa = $regisCtrl->getListofKhoa(); ?>
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
				<?php while ($row = sqlsrv_fetch_array($listKhoa, SQLSRV_FETCH_ASSOC)) { ?>
					<option value="<?= $row['MAKH'] ?>"><?= $row['TENKH'] ?></option>
				<?php } ?>
			</select>

			<div class="clearfix">
				<button type="button" onclick="document.getElementById('teacher-regis').style.display='none'" class="cancelbtn">Hủy bỏ</button>
				<button type="submit" class="signupbtn" name="regisTeacher">Đăng kí</button>
			</div>
		</div>
	</form>
</div>