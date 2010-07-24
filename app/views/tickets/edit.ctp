<div class="tickets form">
<?php echo $this->Form->create('Ticket');?>
	<fieldset>
 		<legend><?php __('Edit Ticket'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('urgency');
		echo $this->Form->input('status');
		echo $this->Form->input('ticket_department_id');
		echo $this->Form->input('added');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Ticket.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Ticket.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ticket Departments', true), array('controller' => 'ticket_departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Department', true), array('controller' => 'ticket_departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Replies', true), array('controller' => 'ticket_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('controller' => 'ticket_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>