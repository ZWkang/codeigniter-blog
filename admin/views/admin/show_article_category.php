<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>添加分类</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3>              <a href="<?php echo site_url('ArticleAction/index');?>" class="actionBtn">文章分类</a>
              <a href="<?php echo site_url('ArticleAction/add');?>" class="actionBtn">添加分类</a>添加分类</h3>
    <form action="<?php echo site_url('ArticleAction/insert');?>" method="post">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <td width="80" align="right">
          分类ID
        </td>
        <td>
          <?php echo $OneCategory['cate_id'];?>
        </td>
      </tr>
      <tr>

       <td width="80" align="right">分类名称</td>
       <td>
        
        <h5 id="NameTips" style="display:inline;"></h5>
        <?php echo $OneCategory['cate_name'];?>
        </td>
      </tr>
      <tr>
       <td align="right">上级分类</td>
       <td>
          <?php echo $OneCategory['pid_name'];?>
       </td>
      </tr>
      <tr>
       <td align="right">关键词</td>
       <td>
          <?php echo $OneCategory['cate_keywords'];?>
       </td>
      </tr>
      <tr>
       <td align="right">分类说明</td>
       <td>
        <?php echo $OneCategory['cate_title'];?>
       </td>
      </tr>
      <tr>
       <td align="right">简单描述</td>
       <td>
        <?php echo $OneCategory['cate_description'];?>
       </td>
      </tr>
      <tr>
       <td align="right">排序</td>
       <td>
        <?php echo $OneCategory['cate_order'];?>
       </td>
      </tr>

     </table>
    </form>
    <a href="<?php echo site_url('ArticleAction/index');?>" style="display:block;width:80px;height:30px;margin:0 auto;font-size:30px;">返回</a>
       </div>
 </div>
 <script>
 </script>
<?php $this->load->view('template/footer');?>