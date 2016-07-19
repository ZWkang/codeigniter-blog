<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>修改</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3>        
              <a href="<?php echo site_url('ArticleAction/index');?>" class="actionBtn">文章分类</a>
              <a href="<?php echo site_url('ArticleAction/add');?>" class="actionBtn">添加分类</a>修改分类</h3>
            <?php foreach($categorye as $v){?>
    <form action="<?php echo site_url('ArticleAction/update/'.$v['cate_id']);?>" method="post">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
           
      <tr>
       <td width="80" align="right">分类名称</td>
       <td>
        <input type="text" name="cate_name" value="<?php echo $v['cate_name'];?>" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">上级分类</td>
       <td>
        <select name="cate_pid">
         <option value="0">最顶级分类</option>
                <?php foreach($article as $value){ ?>
                          <option value="<?php echo $value['cate_id'];?>" 
                          <?php echo $value['cate_id']==$v['cate_pid']?'selected':'';?>> <?php echo str_repeat('&nbsp;&nbsp;', $value['lev']),$value['cate_name'];?></option>
                <?php } ?>
         </select>
       </td>
      </tr>
      <tr>
       <td align="right">关键词</td>
       <td>
        <input type="text" name="cate_keywords" value="<?php echo $v['cate_keywords'];?>" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">分类说明</td>
       <td>
        <input type="text" name="cate_title" value="<?php echo $v['cate_title'];?>" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">简单描述</td>
       <td>
        <textarea name="cate_description" cols="60" rows="4" class="textArea" value=""><?php echo $v['cate_description'];?></textarea>
       </td>
      </tr>
      <tr>
       <td align="right">排序</td>
       <td>
        <input type="text" name="cate_order" value="<?php echo $v['cate_order'];?>" size="5" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="25bfda40" />
        <input type="hidden" name="cate_id" value="<?php echo $v['cate_id'];?>" />
        <input name="submit" class="btn" type="submit" value="提交" />
       </td>
      </tr>
      <?php }?>
     </table>
    </form>
       </div>
 </div>
<?php $this->load->view('template/footer');?>