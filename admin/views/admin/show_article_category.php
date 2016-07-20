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
       <td width="80" align="right">分类名称</td>
       <td>
        <input type="text" id="cate_name" name="cate_name" value="" size="40" class="inpMain" />
        <h5 id="NameTips" style="display:inline;"></h5>
        </td>
      </tr>
      <tr>
       <td align="right">上级分类</td>
       <td>
        <select name="cate_pid">
         <option value="0" selected>最顶级分类</option>
        </select>
       </td>
      </tr>
      <tr>
       <td align="right">关键词</td>
       <td>
        <input type="text" name="cate_keywords" value="" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">分类说明</td>
       <td>
        <input type="text" name="cate_title" value="" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">简单描述</td>
       <td>
        <textarea name="cate_description" cols="60" rows="4" class="textArea"></textarea>
       </td>
      </tr>
      <tr>
       <td align="right">排序</td>
       <td>
        <input type="text" name="cate_order" value="50" size="5" class="inpMain" />
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
      $("#cate_name").change(function(){
        if($("#cate_name").val()!=''){
        var CateUrl="<?php echo site_url
        ('ArticleAction/CheckCateName');?>"
        var values = $("#cate_name").val();
        $.ajax({
          type:"POST",
          url:CateUrl,
          data:{cate_name:values},
          dataType:"json",
          async:true,
          success:function(data){
            $("#NameTips").text(data.msg);
          },
          error:function(datas){
            console.log(datas);
          }
        })
        }
        else{
          alert('error');
        }
      })
 </script>
<?php $this->load->view('template/footer');?>