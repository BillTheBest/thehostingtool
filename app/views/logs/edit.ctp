<div class="logs form">
<?php echo $this->Form->create('Log');?>
	<fieldset>
 		<legend><?php __('Edit Log'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('account_id');
		echo $this->Form->input('staff_account_id');
		echo $this->Form->input('type');
		echo $this->Form->input('category');
		echo $this->Form->input('time');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Log.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Log.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Logs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff Accounts', true), array('controller' => 'staff_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff Account', true), array('controller' => 'staff_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>