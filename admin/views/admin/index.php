<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
<?php $consts = get_defined_constants(TRUE);?>
 <div id="dcMain"> <!-- 当前位置 -->
<div id="urHere">Kang BLOG后台  管理中心</div>  <div id="index" class="mainBox" style="padding-top:18px;height:auto!important;height:550px;min-height:550px;">
      <div class="warning">只有后台的！！！</div>
    
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
          <td><strong><?php echo $count_article;?></strong></td>
                    <td>系统语言：</td>
          <td><strong>zh_cn</strong></td>
         </tr>
         <tr>
          <td>模板地址：</td>
          <td><strong><?php echo $consts['user']['VIEWPATH'];?></strong></td>
          <td>系统语言：</td>
          <td><strong>zh_cn</strong></td>
         </tr>
         <tr>
          <td>当前后台地址：</td>
          <td><strong><?php echo $consts['user']['APPPATH'];?></strong></td>
          <td>站点模板：</td>
          <td><strong>default</strong></td>
         </tr>
         <tr>
          <td>CI 版本：</td>
          <td><strong>Version <?php echo $consts['user']['CI_VERSION'];?></strong></td>
          <td>当前IP：</td>
          <td id="ipaddress"></td>
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
          <th width="10%">操作编号</th>
          <th width="10%">操作用户</th>
          <th width="20%">IP地址</th>
          <th width="20%">操作时间</th>
          <th width="20%">物理地址</th>
          <th width="20%">操作记录</th>
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
       <td valign="top"><?php echo !function_exists('gd_info')?'不支持':'支持'?></td>
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
       <td><a href="http://www.github.com/ZWKang" target="_blank">http://www.github.com/ZWKang</a></td>
      </tr>
      <tr>
       <td> 贡献者： </td>
       <td>xxx</td>
      </tr>
      <tr>
       <td> 系统使用协议： </td>
       <td><a href="https://ls-l.cn" target="_blank">周文康主页。。暂留位置</a><em>（您可以免费使用这个博客（不限商用），但必须保留相关版权信息。）</em></td>
      </tr>
     </table>
    </ul>
   </div>
    
  </div>
 </div>
<script language="javascript" type="text/javascript" src="http://pv.sohu.com/cityjson?ie=utf-8"> 
</script>
<script>
        $(document).ready(function(){
          $("#ipaddress").html(returnCitySN.cip);
        })
</script>
<?php $this->load->view('template/footer');?>