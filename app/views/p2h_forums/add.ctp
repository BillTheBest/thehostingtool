<div class="p2hForums form">
<?php echo $this->Form->create('P2hForum');?>
	<fieldset>
 		<legend><?php __('Add P2h Forum'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List P2h Forums', true), array('action' => 'index'));?></li>
	</ul>
</div>