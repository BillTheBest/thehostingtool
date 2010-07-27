<?php 
    $paginator->options( 
            array('update'=>'ajaxpbox'));
?>
	<?php if(!isset($this->params['named']['page'])) {
	echo '<h1 align="center">Step 1 - Choose Package</h1>';
	}
	?>
	<div id="ajaxpbox">
	<?php $n = 0; $r = 0; foreach($data as $packages):  echo $form->create($packages['Plan']['id']); echo $form->hidden('pID', array('value' => $packages['Plan']['id']));?> 
    <?php
			foreach($postVar as $key => $value) {
				echo $form->hidden($key, array('value' => $value));
			}
				$every = 3;
				if($r > 0 && $r < $every) {
					$class = "boxheaderred";
					$r++;
				}
				elseif($r == $every) {
					$class = "boxheaderblue";
					if($every == 1) {
						$every = 2;	
					}
					elseif($every == 2) {
						$every = 1;	
					}
					$r = 0;
				}
				else {
					$class = "boxheaderblue";	
					$r++;
				}
			?>
    <div class="pbox"> 
		<div class="<?php echo $class ?>"><?php echo $packages['Plan']['name'] ?></div>
		<p><?php echo $packages['Plan']['description'] ?></p>
        <table width="100%" border="0">
		    <tr>
		      <td width="80%"><div class="requirements">Free
		</div></td>
		      <td align="center"><?php echo $ajax->submit('Order', array('id' => $packages['Plan']['id'], 'url'=> '/orders/step2', 'update' => 'ajaxbox' ,'before'  => '$("#ajaxbox").hide("slide",'.$this->viewVars['effectTime'].')', 'complete'  => '$("#ajaxbox").show("slide",{ direction: "right" },'.$this->viewVars['effectTime'].')')); ?></td>              
              </tr>
	        </tr>
	      </table>
    </div> 
    <?php echo $form->end(); ?>
	<?php $n++; endforeach; ?>
    <div id="buttonbox"><div align="center">
	<?php if($n == 0) { echo "<div id='box'><p>There are no packages!</p></div>"; } ?>
    
	<?php 
	$paginator->options(array('update' => 'ajaxpbox'));
		if($n == $limit OR isset($this->params['named']['page'])) {
			$pagevar = 0;
			if(!isset($this->params['named']['page'])) {
				$pagevar = 1;	
			}
			else {
				$pagevar = $this->params['named']['page'];
			}
			$prev = $pagevar - 1;
			$next = $pagevar + 1;
			$prevlink = $ajax->link('< Page '.$prev, '/orders/step1/page:'.$prev, array('update' => 'ajaxpbox', 'class' => 'button', 'before'  => '$("#ajaxpbox").fadeOut('.$this->viewVars['effectTime'].')', 'complete'  => '$("#ajaxpbox").fadeIn('.$this->viewVars['effectTime'].')'));
			$nextlink = $ajax->link('Page '.$next.' >', '/orders/step1/page:'.$next, array('update' => 'ajaxpbox', 'class' => 'button', 'before'  => '$("#ajaxpbox").fadeOut('.$this->viewVars['effectTime'].')', 'complete'  => '$("#ajaxpbox").fadeIn('.$this->viewVars['effectTime'].')'));
			if($prev < 1) {
				$prevlink = "";
			}
			if($pagevar * $limit > $total) {
				$nextlink = "";	
			}
			echo '<table width="100%" border="0" cellspacing="0" cellpadding="0"> 
			<tr>
			  <td width="50%" align="center">'.$prevlink.'</td> 
			  <td align="center" width="50%">'.$nextlink.'</td> 
			</tr> 
		  </table>'; } 
	?> 
     </div></div>
	</div>