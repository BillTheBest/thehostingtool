<div class="bannedDomains form">
<?php echo $this->Form->create('BannedDomain');?>
	<fieldset>
 		<legend><?php __('Add Banned Domain'); ?></legend>
	<?php
		echo $this->Form->input('domain');
		echo $this->Form->input('type');
		echo $this->Form->input('added');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Banned Domains', true), array('action' => 'index'));?></li>
	</ul>
</div>