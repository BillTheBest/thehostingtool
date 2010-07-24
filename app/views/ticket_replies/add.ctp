<div class="ticketReplies form">
<?php echo $this->Form->create('TicketReply');?>
	<fieldset>
 		<legend><?php __('Add Ticket Reply'); ?></legend>
	<?php
		echo $this->Form->input('ticket_id');
		echo $this->Form->input('account_id');
		echo $this->Form->input('staff_account_id');
		echo $this->Form->input('body');
		echo $this->Form->input('added');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ticket Replies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff Accounts', true), array('controller' => 'staff_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff Account', true), array('controller' => 'staff_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>