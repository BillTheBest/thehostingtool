<div class="kbCategories form">
<?php echo $this->Form->create('KbCategory');?>
	<fieldset>
 		<legend><?php __('Add Kb Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Kb Categories', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Kb Articles', true), array('controller' => 'kb_articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kb Article', true), array('controller' => 'kb_articles', 'action' => 'add')); ?> </li>
	</ul>
</div>