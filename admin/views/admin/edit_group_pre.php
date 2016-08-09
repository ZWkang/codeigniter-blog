<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
<div id="dcMain">
	<!-- 当前位置 -->
<div id="urHere">Kang BLOG后台  管理中心<b>></b><strong>网站管理员</strong> </div>   
<div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
	<h3><a href="<?php echo site_url('GroupPreAction/index');?>" class="actionBtn">返回列表</a>网站管理员
	</h3>
	<form action="<?php echo site_url('GroupPreAction/GroupEdit').'/'.$one_group['gid']?>" method="post">
	<table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
	<tr>
		<td width="100" align="center">权限组名称:</td>
		<td>
			<input type="text" name="group_name" size="40" class="inpMain" value="<?php echo $one_group['group_content']?>"/>
		</td>
	</tr>
	<tr>
		<td width="100" align="center">权限组权限标识id:</td>
		<td>
			<p><?php echo $one_group['group_pre']?></p>
		</td>
	</tr>
           <tr>
            	<td width="100" align="center">权限组说明:</td>
            	<td>
               	<input type="text" name="group_content" size="40" class="inpMain" value="<?php echo $one_group['group_content']?>"/>
           	</td>
          </tr>
	 <td align="center">当前权限组拥有权限勾选：</td>
	<td>
	<?php foreach($premissions as $value){?>
          <label for="checkbox"><input name="premissions[]" type="checkbox" value="<?php echo $value['id']?>" <?php echo in_array($value['id'], $group_id)?'checked':'';?>><?php echo $value['instruction']?></label>
          <?php } ?>
          <br/>

         </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input name="submit" class="btn" type="submit" value="提交" />
        <a type="submit" class="btn" value="返回"  href="<?php echo site_url('GroupPreAction/index')?>">返回</a>
       </td>
      </tr>
     </table>
    </form>
                   </div>
 </div>
<?php $this->load->view('template/footer');?>