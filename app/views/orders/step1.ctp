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
		<div class="boxheader"><?php echo $packages['Plan']['name'] ?></div>
		<p><?php echo $packages['Plan']['description'] ?></p>
        <table width="100%" border="0">
		    <tr>
		      <td width="80%"><div class="requirements">Free
		</div></td>
		      <td align="center"><input name="" id="<?php echo $packages['Plan']['id'] ?>" type="button" class="normbutton" value="Order"></td>
	        </tr>
	      </table>
    </div> 
	<?php $n++; endforeach; ?>
	</div>
	<div id="buttonbox"><div align="center">
	<?php if($n == 1) { echo "<div id='box'><p>There are no packages!</p></div>"; } ?>
    
	<?php 
	$paginator->options(array('update' => 'ajaxpbox'));
	if($n > 6) {
		echo '<table width="100%" border="0" cellspacing="0" cellpadding="0"> 
        <tr>
          <td width="30%" align="right"><div class="button">'.$paginator->prev('< Previous', null, null, array('class' => 'disabled')).'</div></td> 		<td width="5%" align="center" class="pnumbers">'.$paginator->numbers(array('separator'=>' - ')).'</td>
          <td align="left" width="30%"><div class="button">'.$paginator->next('Next >>', null, null, array('class' => 'disabled')) .'</div></td> 
        </tr> 
      </table>'; } ?> </div></div>
</div>