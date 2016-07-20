<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
<?php $index_url = site_url('ArticleAction/index');?>
<?php ?>

<?php $urls = site_url("$url").'/'.$id;
echo $message!=''?
	'<script>window.onload=function(){
		layer.confirm(\''.$message.'\', {
		  btn: [\'清楚\',\'不清楚\'] //按钮
		}, function(){
		  layer.msg(\'现在带你去修改页面咯\', {icon: 1},function(){
		  	location.href=\''.$urls.'\';
		  });
		}, function(){
		  layer.confirm(\'就是你不能这么搞\', {
		    time: 20000, //20s后自动关闭
		    btn: [\'明白了\', \'还不清楚\']},
		    function(){
		    	layer.msg(\'跳转到分类页面\',{icon:6},function(){
		    	location.href=\''.$urls.'\';
		    });
		    },function(){
		    	layer.msg(\'你再见！！\',{icon:5},function(){
		    		location.href=\''.$index_url.'\';
		    	});
		    }
		  );
		});
	}</script>':
	'<script>window.onload=function(){
		layer.msg(\'我现在就带你去主页了!!\',{icon:4},function(){
			location.href=\''.$index_url.'\';
		});
	}</script>';
?>
<?php $this->load->view('template/footer');?>
<?php
/**
*这一次添加layer插件是为了什么???
*因为好玩！！ 2016年7月20日14:35:56
*/

?>
<?php
/**
*输出错误信息还有返回的错误页面
*/
?>
