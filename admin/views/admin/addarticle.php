<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>


 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">Kang BLOG后台 管理中心<b>></b><strong>添加文章</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="article.html" class="actionBtn">文章列表</a>添加文章</h3>
    <form action="<?php echo site_url('ArticleDoAction/AddDoArticle');?>" method="post" enctype="multipart/form-data">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">文章标题</td>
       <td>
        <input type="text" name="art_title" value="" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">标签</td>
       <td>
        <input type="text" name="art_tag" value="" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">文章分类</td>
       <td>
        <select name="cate_id">
         <option value="0">未分类</option>
                <?php foreach($category as $value){ ?>
                          <option value="<?php echo $value['cate_id'];?>" > <?php echo str_repeat('&nbsp;&nbsp;', $value['lev']),$value['cate_name'];?></option>
                <?php } ?>

      </select>
       </td>
      </tr>
            <tr>
       <td align="right" valign="top">文章内容</td>
       <td>
        <textarea id="content" name="art_content" style="width:900px;height:590px;" class="textArea"></textarea>
       </td>
      </tr>
      <tr>
       <td align="right">缩略图</td>
       <td>
        <input type="file" name="userfile" size="38" class="inpFlie" />
        <!-- <img src="images/icon_no.png"></td> -->
      </tr>

      <tr>
       <td align="right">简单描述</td>
       <td>
        <input type="text" name="art_description" value="" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input name="submit" class="btn" type="submit" value="提交" />
       </td>
      </tr>
     </table>
    </form>
       </div>
 </div>

<div class="clear"></div>
  <script type="text/javascript" src="<?php echo base_url() ?>ueditor/ueditor.config.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>ueditor/ueditor.all.min.js"></script>
  <script type="text/javascript">
    window.UEDITOR_HOME_URL = "<?php echo base_url() ?>ueditor/";
    window.onload = function(){
      window.UEDITOR_CONFIG.initialFrameWidth = 900;
      window.UEDITOR_CONFIG.initialFrameHeight = 600;
      UE.getEditor('content');
    }
  </script>
 <script type="text/javascript">

 function douAction()
 {
     var frm = document.forms['action'];

     frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
 }
 
 </script>

<?php $this->load->view('template/footer');?>