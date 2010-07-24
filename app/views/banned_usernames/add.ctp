<div class="bannedUsernames form">
<?php echo $this->Form->create('BannedUsername');?>
	<fieldset>
 		<legend><?php __('Add Banned Username'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('type');
		echo $this->Form->input('added');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Banned Usernames', true), array('action' => 'index'));?></li>
	</ul>
</div>