<div class="bannedEmails form">
<?php echo $this->Form->create('BannedEmail');?>
	<fieldset>
 		<legend><?php __('Add Banned Email'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Banned Emails', true), array('action' => 'index'));?></li>
	</ul>
</div>