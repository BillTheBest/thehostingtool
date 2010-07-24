<div class="customFieldValues form">
<?php echo $this->Form->create('CustomFieldValue');?>
	<fieldset>
 		<legend><?php __('Edit Custom Field Value'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('custom_field_id');
		echo $this->Form->input('account_id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CustomFieldValue.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CustomFieldValue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Custom Field Values', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Custom Fields', true), array('controller' => 'custom_fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field', true), array('controller' => 'custom_fields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>