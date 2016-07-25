<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>网站管理员</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="addmanager.html?rec=add" class="actionBtn">添加管理员</a>网站管理员</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="30" align="center">编号</th>
      <th align="left">管理员名称</th>
      <th align="center">E-mail地址</th>
      <th align="center">添加时间</th>
      <th align="center">最后登录时间</th>
      <th align="center">拥有权限标识id</th>
      <th align="center">登录IP</th>
      <th align="center">操作</th>
     </tr>
          <tr>
      <td align="center">1</td>
      <td>admin</td>
      <td align="center"></td>
      <td align="center">2016-02-25</td>
      <td align="center">2016-02-26 20:53:17</td>
      <td align="center">1,2,3,4,5,6,7,8</td>
      <td align="center">127.0.0.1</td>
      <td align="center"><a href="manageraction.html?rec=edit&id=1">编辑</a> | <a href="manager.html?rec=del&id=1">删除</a></td>
      
     </tr>
         </table>
                       </div>
 </div>
<?php $this->load->view('template/footer');?>