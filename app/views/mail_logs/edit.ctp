<div class="mailLogs form">
<?php echo $this->Form->create('MailLog');?>
	<fieldset>
 		<legend><?php __('Edit Mail Log'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('MailLog.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('MailLog.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mail Logs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>