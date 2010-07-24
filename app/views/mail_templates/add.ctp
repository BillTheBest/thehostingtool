<div class="mailTemplates form">
<?php echo $this->Form->create('MailTemplate');?>
	<fieldset>
 		<legend><?php __('Add Mail Template'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('subject');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mail Templates', true), array('action' => 'index'));?></li>
	</ul>
</div>