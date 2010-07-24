<div class="ticketReplies index">
	<h2><?php __('Ticket Replies');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('ticket_id');?></th>
			<th><?php echo $this->Paginator->sort('account_id');?></th>
			<th><?php echo $this->Paginator->sort('staff_account_id');?></th>
			<th><?php echo $this->Paginator->sort('body');?></th>
			<th><?php echo $this->Paginator->sort('added');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ticketReplies as $ticketReply):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ticketReply['TicketReply']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ticketReply['Ticket']['title'], array('controller' => 'tickets', 'action' => 'view', $ticketReply['Ticket']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ticketReply['Account']['username'], array('controller' => 'accounts', 'action' => 'view', $ticketReply['Account']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ticketReply['StaffAccount']['display_name'], array('controller' => 'staff_accounts', 'action' => 'view', $ticketReply['StaffAccount']['id'])); ?>
		</td>
		<td><?php echo $ticketReply['TicketReply']['body']; ?>&nbsp;</td>
		<td><?php echo $ticketReply['TicketReply']['added']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ticketReply['TicketReply']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ticketReply['TicketReply']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ticketReply['TicketReply']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticketReply['TicketReply']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tickets', true), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff Accounts', true), array('controller' => 'staff_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff Account', true), array('controller' => 'staff_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>