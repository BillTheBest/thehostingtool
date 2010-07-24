<div class="bannedUsernames view">
<h2><?php  __('Banned Username');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedUsername['BannedUsername']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedUsername['BannedUsername']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedUsername['BannedUsername']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Added'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedUsername['BannedUsername']['added']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Banned Username', true), array('action' => 'edit', $bannedUsername['BannedUsername']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Banned Username', true), array('action' => 'delete', $bannedUsername['BannedUsername']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bannedUsername['BannedUsername']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Banned Usernames', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banned Username', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
