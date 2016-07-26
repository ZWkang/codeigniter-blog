<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>文章列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="addarticle.html?rec=add" class="actionBtn add">添加文章</a>文章列表</h3>
    <div class="filter">
<!--     <form action="article.php" method="post">
     <select name="cat_id">
      <option value="0">未分类</option>
                  <option value="1"> 公司动态</option>
                        <option value="2"> 行业新闻</option>
                 </select>
     <input name="keyword" type="text" class="inpMain" value="" size="20" />
     <input name="submit" class="btnGray" type="submit" value="筛选" />
    </form> -->
    <span>
        <a class="btnGray" href="article.php?rec=sort">开始筛选首页文章</a>
        </span>
    </div>
        <div id="list">
    <form name="action" method="post" action="article.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
      <th width="40" align="center">编号</th>
      <th align="left">文章名称</th>
      <th width="150" align="center">文章分类</th>
      <th width="80" align="center">添加日期</th>
      <th width="80" align="center">操作</th>
     </tr>
     <?php foreach($articles as $value){?>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="<?php $value['art_id'];?>" /></td>
      <td align="center"><?php echo $value['art_id'];?></td>
      <td><a href="<?php echo site_url('ArticleDoAction/show').'/'.$value['art_id'];?>"><?php echo $value['art_title']?></a></td>
      <td align="center"><a href="article.php?cat_id=1">公司动态</a></td>
      <td align="center"><?php echo $value['art_time'];?></td>
      <td align="center">
              <a href="<?php site_url('ArticleDoAction/EditArticle').'/'.$value['art_id'];?>">编辑</a> | <a href="#" onclick="layer.confirm('确实要删除吗?',{btn:['删掉吧','算了吧']},function(){location.href='<?php echo site_url('ArticleDoAction/DelArticle/'.$value['cate_id']);?>'},function(index){layer.close(index);})" id="">删除</a>
             </td>
     </tr>
      <?php } ?>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $value['art_id'];?>" /></td>
      <td align="center">1</td>
      <td><a href="#">企业网站建设的重要性</a></td>
      <td align="center"><a href="article.php?cat_id=1">公司动态</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
              <a href="article.php?rec=edit&id=1">编辑</a> | <a href="article.php?rec=del&id=1">删除</a>
             </td>
     </tr>
         </table>
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0">请选择...</option>
      <option value="del_all">删除</option>
      <option value="category_move">移动分类至</option>
     </select>
     <select name="new_cat_id" style="display:none">
      <option value="0">未分类</option>
                <?php foreach($category as $value){ ?>
                          <option value="<?php echo $value['cate_id'];?>" > <?php echo str_repeat('&nbsp;&nbsp;', $value['lev']),$value['cate_name'];?></option>
                <?php } ?>
      </select>
     <input name="submit" class="btn" type="submit" value="执行" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <div class="pager">总计 10 个记录，共 1 页，当前第 1 页 | <a href="article.php?page=1">第一页</a> 上一页 下一页 <a href="article.php?page=1">最末页</a></div></div>
 </div>

 <script type="text/javascript">
 
 onload = function()
 {
   document.forms['action'].reset();
 }

 function douAction()
 {
     var frm = document.forms['action'];

     frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
 }
 
 </script>
<?php $this->load->view('template/footer');?>