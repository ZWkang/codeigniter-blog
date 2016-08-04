<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('views/public/css/ch-ui.admin.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('views/public/font/css/font-awesome.min.css');?>">
	<script src="<?php echo base_url('views/public/js/jquery.min.js');?>"></script>
	<script language="javascript" type="text/javascript" src="http://pv.sohu.com/cityjson?ie=utf-8"> 
</script> 

</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Blog</h1>
		<h2>欢迎使用博客管理平台</h2>
		<div class="form">
			<form action="<?php echo site_url('login/login_in');?>" method="post">
				<ul>
					<li>
					<font></font>
					<input type="text" name="username" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>

					<li>
					<font></font>
						<input type="password" name="password" class="text" id="passwd"/>
						<span><i class="fa fa-lock"></i></span>
					</li>

					<li>

						<font></font>
						<input type="text" class="code" name="code"/>
						<img src="<?php echo site_url('login/code');?>" alt="" id="code" style="display:inline-block;">
						<span><i class="fa fa-check-square-o"></i></span>
						<input type="hidden" value="" name="ipaddress" id="ipaddress">
						<input type="hidden" name="cityname" value="" id="cityname">
						
					</li>
					
					<li>
						<input type="submit" value="立即登陆" id="loginsubmit"/>
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
<script type="text/javascript">
     $(document).ready(function () {
                $('#cityname').val(returnCitySN.cname);
                $('#ipaddress').val(returnCitySN.cip);
        })
</script>

</body>
</html>