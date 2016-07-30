<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
   <!-- 当前位置 -->
<div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">Kang BLOG后台 管理中心<b>></b>
  <strong>文章分类</strong> 
</div>   
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3>              <a href="<?php echo site_url('ArticleAction/index');?>" class="actionBtn">文章分类</a>
              <a href="<?php echo site_url('ArticleAction/add');?>" class="actionBtn">添加分类</a>文章分类</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="120" align="left">分类名称</th>
      <th align="left">别名</th>
        <th align="left">简单描述</th>
        <th width="60" align="center">排序</th>
        <th width="80" align="center">操作</th>
      </tr>
     
      <?php foreach($categoryes as $v){?>
      <tr >
        <td align="left"style="padding-left:<?php echo $v['lev']*10;?>px"> <a href="<?php echo site_url('ArticleAction/Show_One_Category/').'/'.$v['cate_id'];?>"><?php echo $v['cate_name'];?></a></td>
        <td><?php echo $v['cate_name'];?></td>
        <td><?php echo $v['cate_title'];?></td>
        <td align="center"><?php echo $v['cate_id'];?></td>
        <td align="center">
          <a href="<?php echo site_url('ArticleAction/edit/'.$v['cate_id']);?>">编辑</a> | 
          <a onclick="layer.confirm('确实要删除吗?',{btn:['删掉吧','算了吧']},function(){location.href='<?php echo site_url('ArticleAction/delete/'.$v['cate_id']);?>'},function(index){layer.close(index);})" href="#">删除</a></td>
      </tr>
      <?php }?>
          </table>
           </div>
 </div>
<?php $this->load->view('template/footer');?>