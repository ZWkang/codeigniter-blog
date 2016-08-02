<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
 <div id="dcMain"> <!-- 当前位置 -->
<div id="urHere">Kang BLOG后台  管理中心</div>  <div id="index" class="mainBox" style="padding-top:18px;height:auto!important;height:550px;min-height:550px;">
      <div class="warning">您还没有删除 install 文件夹，出于安全的考虑，我们建议您删除 install 文件夹。</div>
    
   <div id="douApi"></div>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="indexBoxTwo">
    <tr>
     <td width="30%" valign="top" class="pr">
      <div class="indexBox">
       <div class="boxTitle">网站基本信息</div>
       <ul>
        <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
         <tr>
          <td width="100">文章总数：</td>
          <td><strong>10</strong></td>
         </tr>
         <tr>
          <td>商品总数：</td>
          <td><strong>15</strong></td>
          <td>系统语言：</td>
          <td><strong>zh_cn</strong></td>
         </tr>
         <tr>
          <td>URL 重写：</td>
          <td><strong>关闭<a href="system.php" class="cueRed ml">（点击开启）</a> 
           </strong></td>
          <td>编码：</td>
          <td><strong>UTF-8</strong></td>
         </tr>
         <tr>
          <td>站点地图：</td>
          <td><strong>开启</strong></td>
          <td>站点模板：</td>
          <td><strong>default</strong></td>
         </tr>
         <tr>
          <td>DouPHP版本：</td>
          <td><strong>v1.3 Release 20160125</strong></td>
          <td>安装日期：</td>
          <td><strong>2016-02-25</strong></td>
         </tr>
        </table>
       </ul>
      </div>
     </td>
     <td valign="top" class="pl">
      <div class="indexBox">
       <div class="boxTitle">管理员  登录记录</div>
       <ul>
        <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
         <tr>
          <th width="5%">操作编号</th>
          <th width="10%">操作用户</th>
          <th width="20%">IP地址</th>
          <th width="20%">操作时间</th>
          <th width="15%">物理地址</th>
          <th width="30%">操作记录</th>
         </tr>
         <?php foreach($records as $value){?>
           <tr>
          <td align="center"><?php echo $value['id'];?></td>
          <td align="center"><?php echo $value['user'];?></td>
          <td align="center"><?php echo $value['ip']?></td>
          <td align="center"><?php echo date('Y-m-d H:i:s',$value['time'])?></td>
          <td align="center"><?php echo $value['address'];?></td>
          <td align="center"><?php echo $value['message'];?></td>
         </tr>
         <?php } ?>
                 </table>
       </ul>
      </div>
     </td>
    </tr>
   </table>
   <div class="indexBox">
    <div class="boxTitle">服务器信息</div>
    <ul>
     <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
      <tr>
       <td width="120" valign="top">PHP 版本：</td>
       <td valign="top"><?PHP echo PHP_VERSION; ?> </td>
       <td width="100" valign="top">MySQL 版本：</td>
       <td valign="top">5.5.40</td>
       <td width="100" valign="top">服务器操作系统：</td>
       <td valign="top"><?PHP echo PHP_OS; ?></td>
       <td valign="top">当前服务器IP地址：</td>
       <td valign="top"><?php echo GetHostByName($_SERVER['SERVER_NAME'])?></td>

      </tr>
      <tr>
       <td valign="top">文件上传限制：</td>
       <td valign="top"><?php echo ini_get('upload_max_filesize');?></td>
       <td valign="top">GD 库支持：</td>
       <td valign="top">是</td>
       <td valign="top">Web 服务器：</td>
       <td valign="top"><?php echo $_SERVER['SERVER_SIGNATURE']?></td>
       <td valign="top">Web 服务器系统目录：</td>
       <td valign="top"><?php echo $_SERVER['SystemRoot'];?></td>
      </tr>
     </table>
    </ul>
   </div>
   <div class="indexBox">
    <div class="boxTitle">周文康开发</div>
    <ul>
     <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
    <tr>
       <td width="120"> 个人git 模板： </td>
       <td><a href="http://www.douco.com" target="_blank">http://www.github.com/ZWKang</a></td>
      </tr>
      <tr>
       <td width="120"> DOU 模板： </td>
       <td><a href="http://www.douco.com" target="_blank">http://www.douco.com</a></td>
      </tr>
      <tr>
       <td> 开发者社区： </td>
       <td><a href="http://bbs.douco.cn" target="_blank">http://bbs.douco.cn </a></td>
      </tr>
      <tr>
       <td> 贡献者： </td>
       <td>xxx</td>
      </tr>
      <tr>
       <td> 系统使用协议： </td>
       <td><a href="http://www.douco.com/license.html" target="_blank">周文康主页。。暂留位置</a><em>（您可以免费使用这个博客（不限商用），但必须保留相关版权信息。）</em></td>
      </tr>
     </table>
    </ul>
   </div>
    
  </div>
 </div>

<?php $this->load->view('template/footer');?>