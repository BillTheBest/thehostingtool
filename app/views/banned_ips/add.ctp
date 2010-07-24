<div class="bannedIps form">
<?php echo $this->Form->create('BannedIp');?>
	<fieldset>
 		<legend><?php __('Add Banned Ip'); ?></legend>
	<?php
		echo $this->Form->input('ip');
		echo $this->Form->input('type');
		echo $this->Form->input('added');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Banned Ips', true), array('action' => 'index'));?></li>
	</ul>
</div>