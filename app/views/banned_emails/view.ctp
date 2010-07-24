<div class="bannedEmails view">
<h2><?php  __('Banned Email');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedEmail['BannedEmail']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedEmail['BannedEmail']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedEmail['BannedEmail']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Added'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedEmail['BannedEmail']['added']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Banned Email', true), array('action' => 'edit', $bannedEmail['BannedEmail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Banned Email', true), array('action' => 'delete', $bannedEmail['BannedEmail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bannedEmail['BannedEmail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Banned Emails', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banned Email', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
