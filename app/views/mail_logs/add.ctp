<div class="mailLogs form">
<?php echo $this->Form->create('MailLog');?>
	<fieldset>
 		<legend><?php __('Add Mail Log'); ?></legend>
	<?php
		echo $this->Form->input('account_id');
		echo $this->Form->input('subject');
		echo $this->Form->input('body');
		echo $this->Form->input('time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mail Logs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>