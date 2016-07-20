<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
   <!-- 当前位置 -->
<div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b>
  <strong>友情链接列表</strong> 
</div>   
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3>              <a href="<?php echo site_url('ArticleAction/index');?>" class="actionBtn">友情链接列表</a>
              <a href="<?php echo site_url('LinksAction/add');?>" class="actionBtn">添加友情链接</a>友情链接列表</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="60" align="center">排序</th>
        <th width="20" aligin="left">友情链接ID</th>
        <th width="100" align="left">友情链接名称</th>
        <th align="left">友情链接标题</th>
        <th align="left">链接地址</th>
        
        <th width="80" align="center">操作</th>
      </tr>
      <tr >
        <?php foreach($Links as $v){?>
        <td align="left"> <a href="(应该是下一个模块)"><?php echo $v['cate_name'];?></a></td>
        <td><?php echo $v['cate_name'];?></td>
        <td><?php echo $v['cate_title'];?></td>
        <td align="center"><?php echo $v['cate_id'];?></td>
        <td align="center">
          <a href="<?php echo site_url('LinksAction/edit/'.$v['cate_id']);?>">编辑</a> | 
          <a onclick="if(!layer.confirm('确实要删除吗?')){return false;};" href="<?php echo site_url('LinksAction/delete/'.$v['cate_id']);?>">删除</a></td>
      </tr>
      <?php }?>
          </table>
           </div>
 </div>
<?php $this->load->view('template/footer');?>