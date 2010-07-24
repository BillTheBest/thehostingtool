<div class="servers form">
<?php echo $this->Form->create('Server');?>
	<fieldset>
 		<legend><?php __('Edit Server'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('hostname');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('access_key');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Server.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Server.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Servers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('controller' => 'plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan', true), array('controller' => 'plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subdomains', true), array('controller' => 'subdomains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subdomain', true), array('controller' => 'subdomains', 'action' => 'add')); ?> </li>
	</ul>
</div>