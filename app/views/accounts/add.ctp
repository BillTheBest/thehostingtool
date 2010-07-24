<div class="accounts form">
<?php echo $this->Form->create('Account');?>
	<fieldset>
 		<legend><?php __('Add Account'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('salt');
		echo $this->Form->input('email');
		echo $this->Form->input('security_question');
		echo $this->Form->input('security_answer');
		echo $this->Form->input('registered_ip');
		echo $this->Form->input('last_ip');
		echo $this->Form->input('extras');
		echo $this->Form->input('plan_id');
		echo $this->Form->input('domain');
		echo $this->Form->input('registered');
		echo $this->Form->input('status');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Accounts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('controller' => 'plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan', true), array('controller' => 'plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Custom Field Values', true), array('controller' => 'custom_field_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field Value', true), array('controller' => 'custom_field_values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs', true), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log', true), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mail Logs', true), array('controller' => 'mail_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mail Log', true), array('controller' => 'mail_logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Replies', true), array('controller' => 'ticket_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('controller' => 'ticket_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>