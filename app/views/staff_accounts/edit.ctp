<div class="staffAccounts form">
<?php echo $this->Form->create('StaffAccount');?>
	<fieldset>
 		<legend><?php __('Edit Staff Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('display_name');
		echo $this->Form->input('password');
		echo $this->Form->input('salt');
		echo $this->Form->input('email');
		echo $this->Form->input('added');
		echo $this->Form->input('permissions');
		echo $this->Form->input('signature');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('StaffAccount.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('StaffAccount.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Staff Accounts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Logs', true), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log', true), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Replies', true), array('controller' => 'ticket_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('controller' => 'ticket_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>