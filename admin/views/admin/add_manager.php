<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>

 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>网站管理员</strong> </div>   
<div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="<?php echo site_url('ManagerAction/index');?>" class="actionBtn">返回列表</a>网站管理员
        </h3>
        <form action="manager.php?rec=insert" method="post">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
            <td width="100" align="right">管理员名称</td>
            <td>
            <input type="text" name="user_name" size="40" class="inpMain" />
           </td>
          </tr>
          <tr>
           <td width="100" align="right">E-mail地址</td>
           <td>
            <input type="text" name="email" size="40" class="inpMain" />
           </td>
          </tr>
          <tr>
           <td align="right">当前密码</td>
           <td>
            <input type="password" name="password" size="40" class="inpMain" />
           </td>
          </tr>
          <tr>
           <td align="right">修改密码</td>
           <td>
            <input type="password" name="password_confirm" size="40" class="inpMain" />
           </td>
          </tr>
          <tr>
         <td align="right">权限设定</td>
         <td>
          <label for="checkbox"><input name="premission" type="checkbox" value="1">登录后台</label>
          <label for="checkbox"><input name="premission" type="checkbox" value="2">登录后台</label>
          <label for="checkbox"><input name="premission" type="checkbox" value="3">登录后台</label>
          <label for="checkbox"><input name="premission" type="checkbox" value="4">登录后台</label>
          <br/>
          <label for="checkbox"><input name="premission" type="checkbox" value="5">登录后台</label>
          <label for="checkbox"><input name="premission" type="checkbox" value="6">登录后台</label>

         </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="5a58b748" />
        <input type="submit" name="submit" class="btn" value="提交" />
       </td>
      </tr>
     </table>
    </form>
                   </div>
 </div>
<?php $this->load->view('template/footer');?>