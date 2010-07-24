<div class="tickets view">
<h2><?php  __('Ticket');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticket['Ticket']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticket['Ticket']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticket['Ticket']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Urgency'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticket['Ticket']['urgency']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticket['Ticket']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ticket Department'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ticket['TicketDepartment']['name'], array('controller' => 'ticket_departments', 'action' => 'view', $ticket['TicketDepartment']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Added'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticket['Ticket']['added']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ticket', true), array('action' => 'edit', $ticket['Ticket']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Ticket', true), array('action' => 'delete', $ticket['Ticket']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticket['Ticket']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Departments', true), array('controller' => 'ticket_departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Department', true), array('controller' => 'ticket_departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Replies', true), array('controller' => 'ticket_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('controller' => 'ticket_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Ticket Replies');?></h3>
	<?php if (!empty($ticket['TicketReply'])):?>
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
		foreach ($ticket['TicketReply'] as $ticketReply):
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
