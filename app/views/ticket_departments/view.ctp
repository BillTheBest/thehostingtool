<div class="ticketDepartments view">
<h2><?php  __('Ticket Department');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticketDepartment['TicketDepartment']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticketDepartment['TicketDepartment']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticketDepartment['TicketDepartment']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticketDepartment['TicketDepartment']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hidden'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticketDepartment['TicketDepartment']['hidden']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ticketDepartment['TicketDepartment']['order']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ticket Department', true), array('action' => 'edit', $ticketDepartment['TicketDepartment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Ticket Department', true), array('action' => 'delete', $ticketDepartment['TicketDepartment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticketDepartment['TicketDepartment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Departments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Department', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Tickets');?></h3>
	<?php if (!empty($ticketDepartment['Ticket'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Urgency'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Ticket Department Id'); ?></th>
		<th><?php __('Added'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ticketDepartment['Ticket'] as $ticket):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ticket['id'];?></td>
			<td><?php echo $ticket['title'];?></td>
			<td><?php echo $ticket['content'];?></td>
			<td><?php echo $ticket['urgency'];?></td>
			<td><?php echo $ticket['status'];?></td>
			<td><?php echo $ticket['ticket_department_id'];?></td>
			<td><?php echo $ticket['added'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tickets', 'action' => 'view', $ticket['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tickets', 'action' => 'edit', $ticket['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tickets', 'action' => 'delete', $ticket['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticket['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ticket', true), array('controller' => 'tickets', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
