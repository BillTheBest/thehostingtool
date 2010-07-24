<div class="customFields form">
<?php echo $this->Form->create('CustomField');?>
	<fieldset>
 		<legend><?php __('Add Custom Field'); ?></legend>
	<?php
		echo $this->Form->input('field');
		echo $this->Form->input('description');
		echo $this->Form->input('type');
		echo $this->Form->input('options');
		echo $this->Form->input('required');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Custom Fields', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Custom Field Values', true), array('controller' => 'custom_field_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field Value', true), array('controller' => 'custom_field_values', 'action' => 'add')); ?> </li>
	</ul>
</div>