
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 系统设置 </title>
<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/jquery.tab.js"></script>
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
  <li class="cur"><a href="system.html"><i class="system"></i><em>系统设置</em></a></li>
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
  <li><a href="mobile.html"><i class="mobile"></i><em>手机版</em></a></li>
  <li><a href="theme.html"><i class="theme"></i><em>设置模板</em></a></li>
  <li><a href="manager.html"><i class="manager"></i><em>网站管理员</em></a></li>
  <li><a href="manager.php?rec=manager_log"><i class="managerLog"></i><em>操作记录</em></a></li>
 </ul>
</div></div>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>系统设置</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>系统设置</h3>
    <script type="text/javascript">
     
     $(function(){ $(".idTabs").idTabs(); });
     
    </script>
    <div class="idTabs">
      <ul class="tab">
        <li><a href="#main">常规设置</a></li>
        <li><a href="#display">显示设置</a></li>
        <li><a href="#defined">自定义</a></li>
                <li><a href="#mail">邮件服务器</a></li>
              </ul>
      <div class="items">
       <form action="system.php?rec=update" method="post" enctype="multipart/form-data">
        <div id="main">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131">名称</th>
           <th>内容</th>
         </tr>
                  <tr>
          <td align="right">站点名称</td>
          <td>
                      <input type="text" name="site_name" value="DouPHP轻量级企业网站管理系统" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">站点标题</td>
          <td>
                      <input type="text" name="site_title" value="DouPHP轻量级企业网站管理系统" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">站点关键字</td>
          <td>
                      <input type="text" name="site_keywords" value="DouPHP,轻量级企业网站管理系统" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">站点描述</td>
          <td>
                      <input type="text" name="site_description" value="DouPHP,轻量级企业网站管理系统" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">站点标志</td>
          <td>
                      <input type="file" name="site_logo" size="18" />
           <a href="../theme/default/images/logo.gif" target="_blank"><img src="images/icon_yes.png"></a>                                </td>
         </tr>
                  <tr>
          <td align="right">公司地址</td>
          <td>
                      <input type="text" name="site_address" value="福建省漳州市芗城区" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">是否关闭网站</td>
          <td>
                      <label for="site_closed_0">
            <input type="radio" name="site_closed" id="site_closed_0" value="0" checked="true">
            否</label>
           <label for="site_closed_1">
            <input type="radio" name="site_closed" id="site_closed_1" value="1">
            是</label>
                                </td>
         </tr>
                  <tr>
          <td align="right">ICP备案证书号</td>
          <td>
                      <input type="text" name="icp" value="" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">客服电话</td>
          <td>
                      <input type="text" name="tel" value="0596-8888888" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">传真</td>
          <td>
                      <input type="text" name="fax" value="0596-6666666" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">客服QQ号码</td>
          <td>
                      <input type="text" name="qq" value="" size="80" class="inpMain" />
                                              <p class="cue">多个客服的QQ号码请以半角逗号（,）分隔，如果需要设定昵称则在号码后跟 /昵称。</p>
                                 </td>
         </tr>
                  <tr>
          <td align="right">邮件地址</td>
          <td>
                      <input type="text" name="email" value="your@domain.com" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">系统语言</td>
          <td>
                      <select name="language">
                        <option value="en_us">en_us</option>
                        <option value="zh_cn" selected>zh_cn</option>
                       </select>
                                </td>
         </tr>
                  <tr>
          <td align="right">URL 重写</td>
          <td>
                      <label for="rewrite_0">
            <input type="radio" name="rewrite" id="rewrite_0" value="0" checked="true">
            否</label>
           <label for="rewrite_1">
            <input type="radio" name="rewrite" id="rewrite_1" value="1">
            是</label>
                                              <span class="cue ml">需要Rewrite支持，启用前请重命名根目录和"m"目录下 ".htaccess.txt" 文件为 ".htaccess"，如果不存在请手动下载伪静态规则 <a href="http://down.douco.com/rewrite.rar" target="_blank">点击下载</a></span>
                                 </td>
         </tr>
                  <tr>
          <td align="right">启用站点地图</td>
          <td>
                      <label for="sitemap_0">
            <input type="radio" name="sitemap" id="sitemap_0" value="0">
            否</label>
           <label for="sitemap_1">
            <input type="radio" name="sitemap" id="sitemap_1" value="1" checked="true">
            是</label>
                                </td>
         </tr>
                  <tr>
          <td align="right">启用验证码</td>
          <td>
                      <label for="captcha_0">
            <input type="radio" name="captcha" id="captcha_0" value="0">
            否</label>
           <label for="captcha_1">
            <input type="radio" name="captcha" id="captcha_1" value="1" checked="true">
            是</label>
                                </td>
         </tr>
                  <tr>
          <td align="right">留言板强制中文输入</td>
          <td>
                      <label for="guestbook_check_chinese_0">
            <input type="radio" name="guestbook_check_chinese" id="guestbook_check_chinese_0" value="0">
            否</label>
           <label for="guestbook_check_chinese_1">
            <input type="radio" name="guestbook_check_chinese" id="guestbook_check_chinese_1" value="1" checked="true">
            是</label>
                                              <span class="cue ml">强制用户留言时必须输入中文，可以有效抵御英文广告信息</span>
                                 </td>
         </tr>
                  <tr>
          <td align="right">统计/客服代码调用</td>
          <td>
                      <textarea name="code" cols="83" rows="8" class="textArea" /></textarea>
                                </td>
         </tr>
                 </table>
        </div>
        <div id="display">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131">名称</th>
           <th>内容</th>
         </tr>
                           <tr>
          <td align="right">缩略图宽度</td>
          <td>
           <input type="text" name="thumb_width" value="135" size="80" class="inpMain" />
                     </td>
         </tr>
                                    <tr>
          <td align="right">缩略图高度</td>
          <td>
           <input type="text" name="thumb_height" value="135" size="80" class="inpMain" />
                     </td>
         </tr>
                                    <tr>
          <td align="right">商品价格保留小数位数</td>
          <td>
           <input type="text" name="price_decimal" value="2" size="80" class="inpMain" />
                       <p class="cue">将以四舍五入形式保留小数</p>
                     </td>
         </tr>
                                               <tr>
           <td align="right">文章列表数量</td>
           <td>
            <input type="text" name="display[article]" value="10" size="80" class="inpMain" />
                       </td>
          </tr>
                    <tr>
           <td align="right">首页展示文章数量</td>
           <td>
            <input type="text" name="display[home_article]" value="5" size="80" class="inpMain" />
                       </td>
          </tr>
                    <tr>
           <td align="right">商品列表数量</td>
           <td>
            <input type="text" name="display[product]" value="10" size="80" class="inpMain" />
                       </td>
          </tr>
                    <tr>
           <td align="right">首页展示商品数量</td>
           <td>
            <input type="text" name="display[home_product]" value="4" size="80" class="inpMain" />
                       </td>
          </tr>
                                    </table>
        </div>
        <div id="defined">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131">名称</th>
           <th>内容</th>
         </tr>
                                      <tr>
           <td align="right">文章自定义属性</td>
           <td>
            <input type="text" name="defined[article]" value="" size="80" class="inpMain" />
                         <p class="cue">如"颜色,尺寸,型号"中间以英文逗号隔开</p>
                       </td>
          </tr>
                    <tr>
           <td align="right">商品自定义属性</td>
           <td>
            <input type="text" name="defined[product]" value="" size="80" class="inpMain" />
                         <p class="cue">如"颜色,尺寸,型号"中间以英文逗号隔开</p>
                       </td>
          </tr>
                                    </table>
        </div>
                <div id="mail">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131">名称</th>
           <th>内容</th>
         </tr>
                  <tr>
          <td align="right">邮件服务</td>
          <td>
                      <label for="mail_service_0">
            <input type="radio" name="mail_service" id="mail_service_0" value="0" checked="true">
            系统内置Mail服务</label>
           <label for="mail_service_1">
            <input type="radio" name="mail_service" id="mail_service_1" value="1">
            SMTP服务</label>
                                              <span class="cue ml">如果选择系统内置Mail服务则以下SMTP有关信息无需填写</span>
                                 </td>
         </tr>
                  <tr>
          <td align="right">SMTP服务器</td>
          <td>
                      <input type="text" name="mail_host" value="smtp.domain.com" size="80" class="inpMain" />
                                              <p class="cue">一般邮件服务器地址为：smtp.domain.com，如果是本机则对应localhost即可</p>
                                 </td>
         </tr>
                  <tr>
          <td align="right">服务器端口</td>
          <td>
                      <input type="text" name="mail_port" value="25" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">是否使用SSL安全协议</td>
          <td>
                      <label for="mail_ssl_0">
            <input type="radio" name="mail_ssl" id="mail_ssl_0" value="0" checked="true">
            否</label>
           <label for="mail_ssl_1">
            <input type="radio" name="mail_ssl" id="mail_ssl_1" value="1">
            是</label>
                                </td>
         </tr>
                  <tr>
          <td align="right">发件邮箱</td>
          <td>
                      <input type="text" name="mail_username" value="" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">发件邮箱密码</td>
          <td>
                      <input type="text" name="mail_password" value="" size="80" class="inpMain" />
                                </td>
         </tr>
                 </table>
        </div>
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
          <td width="131"></td>
          <td>
           <input type="hidden" name="token" value="24760807" />
           <input name="submit" class="btn" type="submit" value="提交" />
          </td>
         </tr>
        </table>
        </form>
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