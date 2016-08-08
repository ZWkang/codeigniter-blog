<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">Kang BLOG后台 管理中心<b>></b><strong>网站管理员</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="<?php echo site_url('GroupPreAction/GroupAddShow')?>" class="actionBtn">添加权限组</a>网站管理员</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="" align="center">权限组编号</th>
      <th align="center">权限组名称</th>
      <th align="center">权限组说明</th>
      <th align="center">权限组权限标识</th>
      <th align="center">操作</th>
     </tr>
      <?php foreach ($groups as $value){?>
      <tr>
        <td align="center"><?php echo $value['gid']?></td>
        <td align="center"><?php echo $value['group_name']?></td>
        <td align="center"><?php echo $value['group_content']?></td>
        <td align="center"><?php echo $value['group_pre']?></td>
      <td align="center"><a href="<?php echo site_url('GroupPreAction/GroupEditShow/').'/'.$value['gid']?>">编辑</a> | <a href="manager.html?rec=del&id=1">删除</a></td>
      
     </tr>
     <?php } ?>

         </table>
                       </div>
 </div>
<?php $this->load->view('template/footer');?>