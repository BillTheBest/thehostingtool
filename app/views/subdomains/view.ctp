<div class="subdomains view">
<h2><?php  __('Subdomain');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subdomain['Subdomain']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Domain'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subdomain['Subdomain']['domain']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Server'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($subdomain['Server']['hostname'], array('controller' => 'servers', 'action' => 'view', $subdomain['Server']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Available'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subdomain['Subdomain']['available']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subdomain', true), array('action' => 'edit', $subdomain['Subdomain']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Subdomain', true), array('action' => 'delete', $subdomain['Subdomain']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subdomain['Subdomain']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subdomains', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subdomain', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servers', true), array('controller' => 'servers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Server', true), array('controller' => 'servers', 'action' => 'add')); ?> </li>
	</ul>
</div>
