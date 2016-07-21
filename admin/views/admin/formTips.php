<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('template/head');?>
<?php $this->load->view('template/sildebar');?>
 <div class="section">
        <div class="formTips-mod" >
        	<h1>信息提示！ </h1>
			<h3>友情tips:<p><?php echo $Tips;?></p></h3>
			<p><a href="<?php echo site_url($url);?>">返回</a></p>
		</div>
 </div>
<?php $this->load->view('template/footer');?>