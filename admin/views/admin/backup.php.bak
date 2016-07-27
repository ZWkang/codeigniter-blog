
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 数据备份 </title>
<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
</head>
<body>
<div id="dcWrap">
 <div id="dcHead">
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
  <li class="cur"><a href="backup.html"><i class="backup"></i><em>数据备份</em></a></li>
  <li><a href="mobile.html"><i class="mobile"></i><em>手机版</em></a></li>
  <li><a href="theme.html"><i class="theme"></i><em>设置模板</em></a></li>
  <li><a href="manager.html"><i class="manager"></i><em>网站管理员</em></a></li>
  <li><a href="manager_log.html"><i class="managerLog"></i><em>操作记录</em></a></li>
 </ul>
</div></div>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>数据备份</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="backup.html?rec=restore" class="actionBtn">恢复备份</a>数据备份</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <form name="myform" method="post" action="backup.php?rec=backup">
      <tr>
       <th align="center">
        <input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check' checked>
       </th>
       <th align="left">数据表名</th>
       <th align="center">类型</th>
       <th align="center">记录数</th>
       <th align="center">数据</th>
       <th align="center">索引</th>
       <th align="center">碎片</th>
      </tr>
            <tr>
       <td align="center"><input type=checkbox name=tables[] value=dou_admin checked></td>
       <td align="left">dou_admin</td>
       <td align="center">MyISAM</td>
       <td align="center">1</td>
       <td align="center">84</td>
       <td align="center">2048</td>
       <td align="center">0</td>
      </tr>
            <tr>
       <td align="center"><input type=checkbox name=tables[] value=dou_admin_log checked></td>
       <td align="left">dou_admin_log</td>
       <td align="center">MyISAM</td>
       <td align="center">12</td>
       <td align="center">660</td>
       <td align="center">4096</td>
       <td align="center">0</td>
      </tr>
            <tr>
       <td align="center"><input type=checkbox name=tables[] value=dou_article checked></td>
       <td align="left">dou_article</td>
       <td align="center">MyISAM</td>
       <td align="center">10</td>
       <td align="center">45KB</td>
       <td align="center">2048</td>
       <td align="center">0</td>
      </tr>
            <tr>
       <td align="center"><input type=checkbox name=tables[] value=dou_article_category checked></td>
       <td align="left">dou_article_category</td>
       <td align="center">MyISAM</td>
       <td align="center">2</td>
       <td align="center">140</td>
       <td align="center">2048</td>
       <td align="center">0</td>
      </tr>
            <tr>
       <td align="center"><input type=checkbox name=tables[] value=dou_config checked></td>
       <td align="left">dou_config</td>
       <td align="center">MyISAM</td>
       <td align="center">44</td>
       <td align="center">2284</td>
       <td align="center">1024</td>
       <td align="center">0</td>
      </tr>
            <tr>
       <td align="center"><input type=checkbox name=tables[] value=dou_nav checked></td>
       <td align="left">dou_nav</td>
       <td align="center">MyISAM</td>
       <td align="center">31</td>
       <td align="center">1284</td>
       <td align="center">2048</td>
       <td align="center">0</td>
      </tr>
            <tr>
       <td align="center"><input type=checkbox name=tables[] value=dou_page checked></td>
       <td align="left">dou_page</td>
       <td align="center">MyISAM</td>
       <td align="center">6</td>
       <td align="center">2148</td>
       <td align="center">2048</td>
       <td align="center">0</td>
      </tr>
            <tr>
       <td align="center"><input type=checkbox name=tables[] value=dou_product checked></td>
       <td align="left">dou_product</td>
       <td align="center">MyISAM</td>
       <td align="center">15</td>
       <td align="center">45KB</td>
       <td align="center">2048</td>
       <td align="center">0</td>
      </tr>
            <tr>
       <td align="center"><input type=checkbox name=tables[] value=dou_product_category checked></td>
       <td align="left">dou_product_category</td>
       <td align="center">MyISAM</td>
       <td align="center">5</td>
       <td align="center">384</td>
       <td align="center">2048</td>
       <td align="center">0</td>
      </tr>
            <tr>
       <td align="center"><input type=checkbox name=tables[] value=dou_show checked></td>
       <td align="left">dou_show</td>
       <td align="center">MyISAM</td>
       <td align="center">8</td>
       <td align="center">672</td>
       <td align="center">2048</td>
       <td align="center">0</td>
      </tr>
            <tr>
       <td colspan="7" align="right">数据库占用 118 KB </td>
      </tr>
      <tr>
       <td colspan="7" align="center">分卷备份设置</td>
      </tr>
      <tr>
       <td colspan="7" align="center">
        文件名：<input type="text" class="inpMain" name="file_name" value="D20160226T220644" size=30>
        每个分卷文件大小：<input type="text" class="inpMain" name="vol_size" value="2048" size="5">K
       </td>
      </tr>
      <tr>
       <td height="26" colspan="7">
        <input type="hidden" name="token" value="82ace968" />
        <input type="hidden" name="totalsize" value="118">
        <input type="submit" name="submit" class="btn" value="确定备份"  onClick="document.myform.action='backup.php?rec=backup'">
       </td>
      </tr>
     </form>
    </table>
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