<div class="servers view">
<h2><?php  __('Server');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $server['Server']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $server['Server']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hostname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $server['Server']['hostname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $server['Server']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $server['Server']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Access Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $server['Server']['access_key']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Server', true), array('action' => 'edit', $server['Server']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Server', true), array('action' => 'delete', $server['Server']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $server['Server']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Servers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Server', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('controller' => 'plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan', true), array('controller' => 'plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subdomains', true), array('controller' => 'subdomains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subdomain', true), array('controller' => 'subdomains', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Plans');?></h3>
	<?php if (!empty($server['Plan'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Backend'); ?></th>
		<th><?php __('Server Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Post Reg'); ?></th>
		<th><?php __('Post Month'); ?></th>
		<th><?php __('Admin'); ?></th>
		<th><?php __('Hidden'); ?></th>
		<th><?php __('Disabled'); ?></th>
		<th><?php __('Order'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($server['Plan'] as $plan):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $plan['id'];?></td>
			<td><?php echo $plan['type'];?></td>
			<td><?php echo $plan['backend'];?></td>
			<td><?php echo $plan['server_id'];?></td>
			<td><?php echo $plan['name'];?></td>
			<td><?php echo $plan['description'];?></td>
			<td><?php echo $plan['post_reg'];?></td>
			<td><?php echo $plan['post_month'];?></td>
			<td><?php echo $plan['admin'];?></td>
			<td><?php echo $plan['hidden'];?></td>
			<td><?php echo $plan['disabled'];?></td>
			<td><?php echo $plan['order'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'plans', 'action' => 'view', $plan['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'plans', 'action' => 'edit', $plan['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'plans', 'action' => 'delete', $plan['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $plan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Plan', true), array('controller' => 'plans', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Subdomains');?></h3>
	<?php if (!empty($server['Subdomain'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Domain'); ?></th>
		<th><?php __('Server Id'); ?></th>
		<th><?php __('Available'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($server['Subdomain'] as $subdomain):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subdomain['id'];?></td>
			<td><?php echo $subdomain['domain'];?></td>
			<td><?php echo $subdomain['server_id'];?></td>
			<td><?php echo $subdomain['available'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'subdomains', 'action' => 'view', $subdomain['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'subdomains', 'action' => 'edit', $subdomain['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'subdomains', 'action' => 'delete', $subdomain['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subdomain['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subdomain', true), array('controller' => 'subdomains', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
