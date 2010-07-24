<div class="subdomains form">
<?php echo $this->Form->create('Subdomain');?>
	<fieldset>
 		<legend><?php __('Add Subdomain'); ?></legend>
	<?php
		echo $this->Form->input('domain');
		echo $this->Form->input('server_id');
		echo $this->Form->input('available');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subdomains', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Servers', true), array('controller' => 'servers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Server', true), array('controller' => 'servers', 'action' => 'add')); ?> </li>
	</ul>
</div>