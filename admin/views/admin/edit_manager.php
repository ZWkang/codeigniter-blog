<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>

 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">Kang BLOG后台 管理中心<b>></b><strong>网站管理员</strong> </div>   
<div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="manager.html" class="actionBtn">返回列表</a>网站管理员
        </h3>
        <form action="<?php echo site_url('ManagerAction/EditDoManager').'/'.$manager['user_id'];?>" method="post">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
            <td width="100" align="right">管理员名称</td>
            <td>
            <input type="text" name="user_name" size="40" class="inpMain" value="<?php echo $manager['user_name'];?>"/>
           </td>
          </tr>
          <tr>
           <td width="100" align="right">E-mail地址</td>
           <td>
            <input type="text" name="user_email" size="40" class="inpMain" value="<?php echo $manager['user_email'];?>"/>
           </td>
          </tr>
          <tr>
           <td align="right">当前密码</td>
           <td>
            <input type="password" name="user_pass" size="40" class="inpMain" id="old_pass"/>
            <h5 id="Tips" style="display:inline;" color:"red"></h5>
           </td>
          </tr>
          <tr>
           <td align="right">修改密码</td>
           <td>
            <input type="password" name="update_pass" size="40" class="inpMain" />
           </td>
          </tr>
          <tr>
         <td align="right">所属权限组设定</td>
         <td>
                <select name="user_group" id="user_group">
                  <?php foreach ($groups as $value){?>
                     <option value="<?php echo $value['gid']?>" <?php
                      echo $value['gid']==$manager['user_group']?'selected':'';
                     ?>><?php echo $value['group_name'];?></option>
                  <?php } ?>
                 
                </select>
    
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
 <script type="text/javascript">
      $("#old_pass").change(function(){
        var statid = <?php echo $manager['user_id']!=''?$manager['user_id']:0;?>;
        if($("#old_pass").val()!=''&&statid){
                var CateUrl="<?php echo site_url('ManagerAction/CheckPass');?>";
                var values = $("#old_pass").val();
                $.ajax({
                  type:"POST",
                  url:CateUrl,
                  data:{id:statid,pass:values},
                  dataType:"json",
                  async:true,
                  success:function(data){
                    $("#Tips").text(data.msg);
                    console.log(data);
                    // console.log(data.msg);
                  },
                  error:function(datas){
                    $("#Tips").text(datas.msg);
                  }
                })
                }
        else{
          alert('error');history.back(-1);
        }
      })
 </script>
<?php $this->load->view('template/footer');?>