<div class="plans view">
<h2><?php  __('Plan');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plan['Plan']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plan['Plan']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Backend'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plan['Plan']['backend']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Server'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($plan['Server']['hostname'], array('controller' => 'servers', 'action' => 'view', $plan['Server']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plan['Plan']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plan['Plan']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Reg'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plan['Plan']['post_reg']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Month'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plan['Plan']['post_month']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Admin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plan['Plan']['admin']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hidden'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plan['Plan']['hidden']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Disabled'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plan['Plan']['disabled']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plan['Plan']['order']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plan', true), array('action' => 'edit', $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Plan', true), array('action' => 'delete', $plan['Plan']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servers', true), array('controller' => 'servers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Server', true), array('controller' => 'servers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Accounts');?></h3>
	<?php if (!empty($plan['Account'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Salt'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Security Question'); ?></th>
		<th><?php __('Security Answer'); ?></th>
		<th><?php __('Registered Ip'); ?></th>
		<th><?php __('Last Ip'); ?></th>
		<th><?php __('Extras'); ?></th>
		<th><?php __('Plan Id'); ?></th>
		<th><?php __('Domain'); ?></th>
		<th><?php __('Registered'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Notes'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($plan['Account'] as $account):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $account['id'];?></td>
			<td><?php echo $account['username'];?></td>
			<td><?php echo $account['password'];?></td>
			<td><?php echo $account['salt'];?></td>
			<td><?php echo $account['email'];?></td>
			<td><?php echo $account['security_question'];?></td>
			<td><?php echo $account['security_answer'];?></td>
			<td><?php echo $account['registered_ip'];?></td>
			<td><?php echo $account['last_ip'];?></td>
			<td><?php echo $account['extras'];?></td>
			<td><?php echo $account['plan_id'];?></td>
			<td><?php echo $account['domain'];?></td>
			<td><?php echo $account['registered'];?></td>
			<td><?php echo $account['status'];?></td>
			<td><?php echo $account['notes'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'accounts', 'action' => 'view', $account['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'accounts', 'action' => 'edit', $account['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'accounts', 'action' => 'delete', $account['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $account['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
