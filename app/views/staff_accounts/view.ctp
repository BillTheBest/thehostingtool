<div class="staffAccounts view">
<h2><?php  __('Staff Account');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staffAccount['StaffAccount']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staffAccount['StaffAccount']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Display Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staffAccount['StaffAccount']['display_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staffAccount['StaffAccount']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Salt'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staffAccount['StaffAccount']['salt']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staffAccount['StaffAccount']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Added'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staffAccount['StaffAccount']['added']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Permissions'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staffAccount['StaffAccount']['permissions']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Signature'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staffAccount['StaffAccount']['signature']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Staff Account', true), array('action' => 'edit', $staffAccount['StaffAccount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Staff Account', true), array('action' => 'delete', $staffAccount['StaffAccount']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $staffAccount['StaffAccount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff Accounts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff Account', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs', true), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log', true), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Replies', true), array('controller' => 'ticket_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('controller' => 'ticket_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Logs');?></h3>
	<?php if (!empty($staffAccount['Log'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Account Id'); ?></th>
		<th><?php __('Staff Account Id'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Category'); ?></th>
		<th><?php __('Time'); ?></th>
		<th><?php __('Message'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($staffAccount['Log'] as $log):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $log['id'];?></td>
			<td><?php echo $log['account_id'];?></td>
			<td><?php echo $log['staff_account_id'];?></td>
			<td><?php echo $log['type'];?></td>
			<td><?php echo $log['category'];?></td>
			<td><?php echo $log['time'];?></td>
			<td><?php echo $log['message'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'logs', 'action' => 'view', $log['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'logs', 'action' => 'edit', $log['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'logs', 'action' => 'delete', $log['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $log['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Log', true), array('controller' => 'logs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Ticket Replies');?></h3>
	<?php if (!empty($staffAccount['TicketReply'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Ticket Id'); ?></th>
		<th><?php __('Account Id'); ?></th>
		<th><?php __('Staff Account Id'); ?></th>
		<th><?php __('Body'); ?></th>
		<th><?php __('Added'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($staffAccount['TicketReply'] as $ticketReply):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ticketReply['id'];?></td>
			<td><?php echo $ticketReply['ticket_id'];?></td>
			<td><?php echo $ticketReply['account_id'];?></td>
			<td><?php echo $ticketReply['staff_account_id'];?></td>
			<td><?php echo $ticketReply['body'];?></td>
			<td><?php echo $ticketReply['added'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'ticket_replies', 'action' => 'view', $ticketReply['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'ticket_replies', 'action' => 'edit', $ticketReply['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'ticket_replies', 'action' => 'delete', $ticketReply['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticketReply['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('controller' => 'ticket_replies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
