<div class="ticketDepartments form">
<?php echo $this->Form->create('TicketDepartment');?>
	<fieldset>
 		<legend><?php __('Add Ticket Department'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('description');
		echo $this->Form->input('hidden');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ticket Departments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>