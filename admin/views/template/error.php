<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
<?php $id = $id!=''?"$id":''?>
<?php $urls = site_url("$url").'/'.$id;
echo $message!=''?'<script>window.onload=function(){
	confirm(\''.$message.'\');
		
			location.href=\''.$urls.'\';}
		</script>':'<script>window.onload=function(){location.href=location.href=\''.$urls.'\';}<script>';?>
<?php $this->load->view('template/footer');?>
<?php
/**
*输出错误信息还有返回的错误页面
*/
?>
