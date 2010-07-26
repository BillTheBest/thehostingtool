<div class="container" id="ajaxbox">
    <h1 align="center">Order Form</h1>
    <div id="box" style="margin:auto auto; width:100%;"> 
        <div class="padding">
		<b>Do you agree to Host Name Here Terms of Service?</b><br />
		TOS HERE
		</div>
    </div>
	<div id="buttonbox"><div align="center"><?php echo $ajax->link('I Agree', '/orders/step1', array('update' => 'ajaxbox', 'class' => 'button', 'before'  => '$("#ajaxbox").effect("drop",'.$this->viewVars['effectTimes']['drop'].')', 'after'  => '$("#ajaxbox").effect("slide",{ direction: "right" },'.$this->viewVars['effectTimes']['slide'].')')); ?></div>
</div>
