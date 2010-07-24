<div class="configValues form">
<?php echo $this->Form->create('ConfigValue');?>
	<fieldset>
 		<legend><?php __('Add Config Value'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Config Values', true), array('action' => 'index'));?></li>
	</ul>
</div>