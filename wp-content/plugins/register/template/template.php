
<form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

	<div>
		<label for="namedn">Tên doanh nghiệp <strong>*</strong></label>
		<input type="text" name="namedn" value="">
	</div>

	<div>
		<label for="email">Email <strong>*</strong></label>
		<input type="email" name="email" value="">
	</div>

	<div>
		<label for="username">Username <strong>*</strong></label>
		<input type="text" name="username" value="">
	</div>

	<div>
		<label for="password">Mật khẩu <strong>*</strong></label>
		<input type="password" name="password" value="">
	</div>

	<div>
		<label for="password">Nhập lại mật khẩu<strong>*</strong></label>
		<input type="password" name="repass" value="">
	</div>

	<input type="submit" name="submit" value="Đăng kí"/>
</form>