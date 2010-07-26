<?php 
    $paginator->options( 
            array('update'=>'ajaxpbox'));
?>
<?php echo $javascript->link(array('prototype')); ?> 
<div class="container">
	<h1 align="center">Step 1 - Choose Package</h1>
	<div id="ajaxpbox">
	<?php $n = 1; foreach($data as $packages): ?> 
    <div class="pbox"> 
    	<?php echo $form->create($packages['Plan']['id']); echo $form->hidden('id', array('value' => $packages['Plan']['id'])); ?>
		<div class="boxheader"><?php echo $packages['Plan']['name'] ?></div>
		<p><?php echo $packages['Plan']['description'] ?></p>
        <table width="100%" border="0">
		    <tr>
		      <td width="80%"><div class="requirements">Free
		</div></td>
		      <td align="center"><?php echo $ajax->submit('Order', array('url'=> '/orders/step2', 'update' => 'ajaxbox' ,'before'  => '$("#ajaxbox").effect("drop",'.$this->viewVars['effectTimes']['drop'].')', 'after'  => '$("#ajaxbox").effect("slide",{ direction: "right" },'.$this->viewVars['effectTimes']['slide'].')')); ?></td>
              </tr>
	        </tr>
	      </table>
          <?php echo $form->end(); ?>
    </div> 
	<?php $n++; endforeach; ?>
	</div>
	<div id="buttonbox"><div align="center">
	<?php if($n == 1) { echo "<div id='box'><p>There are no packages!</p></div>"; } ?>
    
	<?php 
	$paginator->options(array('update' => 'ajaxpbox'));
	if($n > 6 OR isset($this->params['named']['page'])) {
		$pagevar = 0;
		if(!isset($this->params['named']['page'])) {
			$pagevar = 1;	
		}
		else {
			$pagevar = $this->params['named']['page'];
		}
		$prev = $pagevar - 1;
		$next = $pagevar + 1;
		echo '<table width="100%" border="0" cellspacing="0" cellpadding="0"> 
        <tr>
          <td width="50%" align="center"'.$ajax->link('< Previous', '/orders/step1/page:'.$prev, array('update' => 'ajaxbox', 'class' => 'button', 'before'  => '$("#ajaxbox").effect("drop",'.$this->viewVars['effectTimes']['drop'].')', 'after'  => '$("#ajaxbox").effect("slide",{ direction: "right" },'.$this->viewVars['effectTimes']['slide'].')')).'</td> 
          <td align="center" width="50%">'.$ajax->link('Next >', '/orders/step1/page:'.$next, array('update' => 'ajaxbox', 'class' => 'button', 'before'  => '$("#ajaxbox").effect("drop",'.$this->viewVars['effectTimes']['drop'].')', 'after'  => '$("#ajaxbox").effect("slide",{ direction: "right" },'.$this->viewVars['effectTimes']['slide'].')')).'</td> 
        </tr> 
      </table>'; } ?> </div></div>
</div>