<div class="plans form">
<?php echo $this->Form->create('Plan');?>
	<fieldset>
 		<legend><?php __('Edit Plan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('backend');
		echo $this->Form->input('server_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('post_reg');
		echo $this->Form->input('post_month');
		echo $this->Form->input('admin');
		echo $this->Form->input('hidden');
		echo $this->Form->input('disabled');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Plan.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Plan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Servers', true), array('controller' => 'servers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Server', true), array('controller' => 'servers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>