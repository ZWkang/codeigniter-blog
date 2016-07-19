<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>首页幻灯广告</strong> </div>   <div class="mainBox imgModule">
    <h3>首页幻灯广告</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
    <tr>
       <th>修改文章分类</th>
     </tr>

     <tr>
      <td width="350" valign="top">
       <form action="articleedit.php?action=edit&id=1" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableOnebor">
         <tr>
          <td><b>标题</b>
            <input type="text" name="show_name" value="<?php echo $v['cate_name'];?>" size="20" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td><b>文章概要</b>
           <input type="file" name="show_img" class="inpFlie" />          </td>
         </tr>
         <tr>
          <td><b>文章地址</b>
           <input type="text" name="show_link" value="" size="40" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td><b>文章标签</b>
<input type="text" name="sort" value="50" size="20" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td>
              <input type="hidden" name="token" value="79db104d" />
           <input name="submit" class="btn" type="submit" value="提交" />
          </td>
         </tr>
         <?php }?>
        </table>
       </form>
      </td>

     </tr>
    </table>
   </div>
 </div>
<?php $this->load->view('template/footer');?>