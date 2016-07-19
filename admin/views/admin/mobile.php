<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 手机版系统设置 </title>
<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/jquery.tab.js"></script>
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
    <li><a href="http://help.douco.com" target="_blank">帮助</a></li>
    <li class="noRight"><a href="module.html">DouPHP+</a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
     <div class="drop mUser">
      <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
      <a href="manager.php?rec=cloud_account">设置云账户</a>
     </div>
    </li>
    <li class="noRight"><a href="login.php?rec=logout">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">
 <ul class="top">
  <li><a href="index.html"><i class="home"></i><em>管理首页</em></a></li>
 </ul>
 <ul>
  <li><a href="system.html"><i class="system"></i><em>系统设置</em></a></li>
  <li><a href="nav.html"><i class="nav"></i><em>自定义导航栏</em></a></li>
  <li><a href="show.html"><i class="show"></i><em>首页幻灯广告</em></a></li>
  <li><a href="page.html"><i class="page"></i><em>单页面管理</em></a></li>
 </ul>
   <ul>
  <li><a href="product_category.html"><i class="productCat"></i><em>商品分类</em></a></li>
  <li><a href="product.html"><i class="product"></i><em>商品列表</em></a></li>
 </ul>
  <ul>
  <li><a href="article_category.html"><i class="articleCat"></i><em>文章分类</em></a></li>
  <li><a href="article.html"><i class="article"></i><em>文章列表</em></a></li>
 </ul>
   <ul class="bot">
  <li><a href="backup.html"><i class="backup"></i><em>数据备份</em></a></li>
  <li class="cur"><a href="mobile.html"><i class="mobile"></i><em>手机版</em></a></li>
  <li><a href="theme.html"><i class="theme"></i><em>设置模板</em></a></li>
  <li><a href="manager.html"><i class="manager"></i><em>网站管理员</em></a></li>
  <li><a href="manager_log.html"><i class="managerLog"></i><em>操作记录</em></a></li>
 </ul>
</div></div>
 <div id="dcMain"> <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>手机版系统设置</strong> </div>  <div id="mobileBox">
   <div id="mMenu">
    <h3>手机版</h3>
    <ul>
     <li><a href="mobile.php" class="cur">手机版系统设置</a></li>
     <li><a href="mobile.php?rec=nav">手机版导航</a></li>
     <li><a href="mobile.php?rec=show">手机版幻灯</a></li>
     <li><a href="mobile.php?rec=theme">手机版模板</a></li>
    </ul>
   </div>
   <div id="mMain">
    <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
          <h3>手机版系统设置</h3>
     <div class="system">
      <form action="mobile.php?rec=system&act=update" method="post" enctype="multipart/form-data">
       <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
         <th width="141">名称</th>
         <th>内容</th>
        </tr>
                        <tr>
         <td align="right">手机版站名</td>
         <td>
                    <input type="text" name="mobile_name" value="DouPHP" size="80" class="inpMain" />
                             </td>
        </tr>
                                <tr>
         <td align="right">手机版标题</td>
         <td>
                    <input type="text" name="mobile_title" value="DouPHP触屏版" size="80" class="inpMain" />
                             </td>
        </tr>
                                <tr>
         <td align="right">手机版关键字</td>
         <td>
                    <input type="text" name="mobile_keywords" value="DouPHP,DouPHP触屏版" size="80" class="inpMain" />
                             </td>
        </tr>
                                <tr>
         <td align="right">手机版描述</td>
         <td>
                    <input type="text" name="mobile_description" value="DouPHP,DouPHP触屏版" size="80" class="inpMain" />
                             </td>
        </tr>
                                <tr>
         <td align="right">手机版标志</td>
         <td>
                    <input type="file" name="mobile_logo" size="18" />
          <img src="images/icon_no.png">                             </td>
        </tr>
                                <tr>
         <td align="right">是否关闭手机版</td>
         <td>
                    <label for="mobile_closed_0">
           <input type="radio" name="mobile_closed" id="mobile_closed_0" value="0" checked="true">
           否</label>
          <label for="mobile_closed_1">
           <input type="radio" name="mobile_closed" id="mobile_closed_1" value="1">
           是</label>
                             </td>
        </tr>
                                          <tr>
          <td align="right">手机版文章列表数量</td>
          <td>
           <input type="text" name="mobile_display[article]" value="10" size="80" class="inpMain" />
                     </td>
         </tr>
                  <tr>
          <td align="right">手机版首页展示文章数量</td>
          <td>
           <input type="text" name="mobile_display[home_article]" value="5" size="80" class="inpMain" />
                     </td>
         </tr>
                  <tr>
          <td align="right">手机版商品列表数量</td>
          <td>
           <input type="text" name="mobile_display[product]" value="10" size="80" class="inpMain" />
                     </td>
         </tr>
                  <tr>
          <td align="right">手机版首页展示商品数量</td>
          <td>
           <input type="text" name="mobile_display[home_product]" value="4" size="80" class="inpMain" />
                     </td>
         </tr>
                                 <tr>
         <td width="131"></td>
         <td>
          <input type="hidden" name="token" value="21e7d277" />
          <input name="submit" class="btn" type="submit" value="提交" />
         </td>
        </tr>
       </table>
      </form>
     </div>
      
      
      
      
    </div>
   </div>
  </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
</body>
</html>