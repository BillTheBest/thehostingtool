<div class="p2hForums form">
<?php echo $this->Form->create('P2hForum');?>
	<fieldset>
 		<legend><?php __('Edit P2h Forum'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('type');
		echo $this->Form->input('db_login');
		echo $this->Form->input('db_password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('P2hForum.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('P2hForum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List P2h Forums', true), array('action' => 'index'));?></li>
	</ul>
</div>