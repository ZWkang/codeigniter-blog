<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">Kang BLOG后台 管理中心<b>></b><strong>网站管理员</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="<?php echo site_url('ManagerAction/AddManagerShow')?>" class="actionBtn">添加管理员</a>网站管理员</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="30" align="center">编号</th>
      <th align="center">管理员名称</th>
      <th align="center">E-mail地址</th>
      <th align="center">添加时间</th>
      <th align="center">最后登录时间</th>
      <th align="center">所属权限组</th>
      <th align="center">登录IP</th>
      <th align="center">操作</th>
     </tr>
     <?php foreach($Managers as $value){//print_r($value);exit();?>

      <tr>
      <td align="center"><?php echo $value['user_id'];?></td>
      <td align="center"><a href="<?php echo site_url('ManagerAction/ShowOneManager').'/'.$value['user_id']?>"><?php echo $value['user_name'];?></a></td>
      <td align="center"><?php echo $value['user_email'];?></td>
      <td align="center"><?php echo $value['user_addtime'];?></td>
      <td align="center"><?php echo $value['user_lastlogin'];?></td>
      <td align="center"><a title="<?php echo $value['group_content'];?>"><?php echo $value['group_name'];?></a></td>
      <td align="center"><?php echo $value['user_ip'];?></td>
      <td align="center"><a href="<?php echo site_url('ManagerAction/EditManagerShow').'/'.$value['user_id']?>">编辑</a> | <a href="<?php echo site_url('ManagerAction/DelManager').'/'.$value['user_id']?>">删除</a></td>
      
     </tr>
     <?php } ?>
         </table>
                       </div>
 </div>
<?php $this->load->view('template/footer');?>