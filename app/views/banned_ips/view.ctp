<div class="bannedIps view">
<h2><?php  __('Banned Ip');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedIp['BannedIp']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ip'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedIp['BannedIp']['ip']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedIp['BannedIp']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Added'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedIp['BannedIp']['added']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Banned Ip', true), array('action' => 'edit', $bannedIp['BannedIp']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Banned Ip', true), array('action' => 'delete', $bannedIp['BannedIp']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bannedIp['BannedIp']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Banned Ips', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banned Ip', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
