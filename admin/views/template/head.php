<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>KANG  BLOG  管理中心</title>
<meta name="Copyright" content="Douco Design." />
<link href="<?php echo base_url('views/public/css/public.css');?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo base_url('views/public/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('views/public/js/global.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('views/public/js/layer/layer.js');?>"></script>
</head>
<body>
<div id="dcWrap"> <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="images/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   <ul>
    <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
     <div class="drop mTopad"><a href="product.php?rec=add">商品</a> <a href="article.php?rec=add">文章</a> <a href="nav.php?rec=add">自定义导航</a> <a href="show.html">首页幻灯</a> <a href="page.php?rec=add">单页面</a> <a href="manager.php?rec=add">管理员</a> <a href="link.html"></a> </div>
    </li>
    <li><a href="../index.php" target="_blank">查看站点</a></li>
    <li><a href="index.php?rec=clear_cache">清除缓存</a></li>
    <li class="noRight"><a href="module.html">DouPHP+</a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
     <div class="drop mUser">
      <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
     </div>
    </li>
    <li class="noRight"><a href="<?php echo site_url('Login/login_out')?>">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --> 