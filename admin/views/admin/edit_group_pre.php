<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">Kang BLOG后台  管理中心<b>></b><strong>网站管理员</strong> </div>   
<div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="<?php echo site_url('ManagerAction/index');?>" class="actionBtn">返回列表</a>网站管理员
        </h3>
        <form action="manager.php?rec=insert" method="post">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
              <tr>
            <td width="100" align="right">权限组名称:</td>
            <td>
                <input type="text" name="group_name" size="40" class="inpMain" value=""/>
           </td>
          </tr>

                <tr>
            <td width="100" align="right">权限组权限选择：</td>
            <td>
                <input type="text" name="group_premission[]" size="40" class="inpMain" value=""/>
           </td>
          </tr>
         <td align="right">当前权限</td>
         <td>
            
            <label for=""></label>
          <br/>

         </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="5a58b748" />
        <a type="submit" class="btn" value="返回"  href="<?php echo site_url('GroupPreAction/index')?>">返回</a>
       </td>
      </tr>
     </table>
    </form>
                   </div>
 </div>
<?php $this->load->view('template/footer');?>