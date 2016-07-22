<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>修改</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3>        
              <a href="<?php echo site_url('LinksAction/index');?>" class="actionBtn">链接列表</a>
              <a href="<?php echo site_url('LinksAction/addShow');?>" class="actionBtn">添加链接</a>添加链接</h3>
              <?php //print_r($Link);?>
    <form action="<?php echo site_url('LinksAction/addInsert/');?>" method="post">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td align="right">链接名称</td>
       <td>
        <input type="text" name="link_name" value="" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">链接标题</td>
       <td>
        <input type="text" name="link_title" value="" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">链接url地址</td>
       <td>
          <input type="text" name="link_url" value="" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">排序</td>
       <td>
        <input type="text" name="link_order" value="" size="5" class="inpMain" id="number_only" />
        <font >只允许数字啊！！</font>
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="25bfda40" />
        <input name="submit" class="btn" type="submit" value="提交" />
       </td>
      </tr>
     </table>
    </form>
   </div>
 </div>
 <script>
      window.onload=function(){
        var fm = document.getElementsByTagName('form')[0];
        fm.onsubmit = function(){
          if(isNaN(fm.link_order.value)||fm.link_order.value==''){
            alert('排序只允许数字且不为空');
            fm.link_order.value='';
            fm.link_order.focus();
            return false;
          }
        }
      }
 </script>
<?php $this->load->view('template/footer');?>