<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo site_url('public/css/ch-ui.admin.css')?>">
	<link rel="stylesheet" href="<?php echo site_url('public/font/css/font-awesome.min.css');?>">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Blog</h1>
		<h2>欢迎使用博客管理平台</h2>
		<div class="form">
			<p style="color:red">用户名错误</p>
			<form action="<?php echo site_url('login/login_in');?>" method="post">
				<ul>
					<li>
					<font>账户名</font>
					<input type="text" name="username" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>

					<li>
					<font>密&nbsp;&nbsp;&nbsp;&nbsp;码</font>
						<input type="password" name="password" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>

					<li>

					<font>验证码</font>
						<input type="text" class="code" name="code"/>
						<span><i class="fa fa-check-square-o"></i></span>
						
					</li>
					<img src="<?php echo site_url('login/code');?>" alt="" id="code" style="float:left;">
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">返回首页</a> &copy; 2016 Powered by Kang</p>
		</div>
	</div>
	<script>

(function code () {
	var code = document.getElementById('code');
	code.onclick = function () {
		this.src='http://localhost/CII/admin/index.php/login/code?tm='+Math.random();
	};
})();
	</script>
</body>
</html>