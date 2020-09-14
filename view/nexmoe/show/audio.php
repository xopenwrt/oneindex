<?php view::layout('layout')?>
<?php view::begin('content');?>
<div class="mdui-container-fluid">
    <div class="nexmoe-item">
		<audio class="mdui-center" src="<?php e($item['downloadUrl']);?>" controls  style="width: 100%;"  poster="<?php @e($item['thumb'].'&width=176&height=176');?>"></audio>

	</div>
	<div class="mdui-textfield">
	  <label class="mdui-textfield-label">下载地址</label>
	  <input class="mdui-textfield-input" type="text" value="<?php e($url);?>"/>
	</div>
	<div class="mdui-textfield">
	  <label class="mdui-textfield-label">HTML 引用地址</label>
	  <input class="mdui-textfield-input" type="text" value="<audio class='mdui-center' src='<?php e($url);?>' controls='' style='width: 100%;' poster='&amp;width=176&amp;height=176'></audio>" />
	</div>
</div>
<a href="<?php e($url);?>" class="mdui-fab mdui-fab-fixed mdui-ripple mdui-color-theme-accent"><i class="mdui-icon material-icons">file_download</i></a>
<?php view::end('content');?>
