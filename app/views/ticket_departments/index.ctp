<div class="ticketDepartments index">
	<h2><?php __('Ticket Departments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('hidden');?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ticketDepartments as $ticketDepartment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ticketDepartment['TicketDepartment']['id']; ?>&nbsp;</td>
		<td><?php echo $ticketDepartment['TicketDepartment']['name']; ?>&nbsp;</td>
		<td><?php echo $ticketDepartment['TicketDepartment']['email']; ?>&nbsp;</td>
		<td><?php echo $ticketDepartment['TicketDepartment']['description']; ?>&nbsp;</td>
		<td><?php echo $ticketDepartment['TicketDepartment']['hidden']; ?>&nbsp;</td>
		<td><?php echo $ticketDepartment['TicketDepartment']['order']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ticketDepartment['TicketDepartment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ticketDepartment['TicketDepartment']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ticketDepartment['TicketDepartment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticketDepartment['TicketDepartment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Ticket Department', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>