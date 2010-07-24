<div class="bannedDomains view">
<h2><?php  __('Banned Domain');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedDomain['BannedDomain']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Domain'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedDomain['BannedDomain']['domain']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedDomain['BannedDomain']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Added'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bannedDomain['BannedDomain']['added']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Banned Domain', true), array('action' => 'edit', $bannedDomain['BannedDomain']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Banned Domain', true), array('action' => 'delete', $bannedDomain['BannedDomain']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bannedDomain['BannedDomain']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Banned Domains', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banned Domain', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
