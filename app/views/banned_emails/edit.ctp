<div class="bannedEmails form">
<?php echo $this->Form->create('BannedEmail');?>
	<fieldset>
 		<legend><?php __('Edit Banned Email'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('email');
		echo $this->Form->input('type');
		echo $this->Form->input('added');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('BannedEmail.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('BannedEmail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Banned Emails', true), array('action' => 'index'));?></li>
	</ul>
</div>