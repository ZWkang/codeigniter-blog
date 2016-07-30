<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
   <!-- 当前位置 -->
<div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">Kang BLOG后台 管理中心<b>></b>
  <strong>友情链接列表</strong> 
</div>   
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3>              <a href="<?php echo site_url('ArticleAction/index');?>" class="actionBtn">友情链接列表</a>
              <a href="<?php echo site_url('LinksAction/addShow');?>" class="actionBtn">添加友情链接</a>友情链接列表</h3>
    <table style="text-algin:center;"width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="20px" align="center">排序</th>
        <th width="100" aligin="center">友情链接ID</th>
        <th width="120" align="center">友情链接名称</th>
        <th align="center">友情链接标题</th>
        <th align="center">链接地址</th>
        
        <th width="80" align="center">操作</th>
      </tr>
      <?php foreach($Links as $v){?>
      <tr valign="middle">
        <td algin="center"><input width='20px' type="text" value="<?php echo $v['link_order']?>"></td>
        <td align="center"> <a href="(应该是下一个模块)"><?php echo $v['link_id'];?></a></td>
        <td algin="center "valign="middle"><?php echo $v['link_name'];?></td>
        <td algin="center" valign="middle"><?php echo $v['link_title'];?></td>
        <td align="center"><?php echo $v['link_url'];?></td>

        <td align="center">
          <a href="<?php echo site_url('LinksAction/editShow/'.$v['link_id']);?>">编辑</a> | 
          <a onclick="layer.confirm('确实要删除吗?',
          {btn:['删掉吧','算了吧']},
          function(){location.href='<?php echo site_url('LinksAction/LinksDel/'.$v['link_id']);?>'},
          function(index){layer.close(index);})" href="#">删除</a></td>
      </tr>
      <?php }?>
          </table>
           </div>
 </div>
<?php $this->load->view('template/footer');?>
