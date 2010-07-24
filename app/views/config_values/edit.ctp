<div class="configValues form">
<?php echo $this->Form->create('ConfigValue');?>
	<fieldset>
 		<legend><?php __('Edit Config Value'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('value');
		echo $this->Form->input('added');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ConfigValue.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ConfigValue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Config Values', true), array('action' => 'index'));?></li>
	</ul>
</div>