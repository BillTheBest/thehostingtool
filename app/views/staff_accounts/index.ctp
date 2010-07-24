<div class="staffAccounts index">
	<h2><?php __('Staff Accounts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('display_name');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('salt');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('added');?></th>
			<th><?php echo $this->Paginator->sort('permissions');?></th>
			<th><?php echo $this->Paginator->sort('signature');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($staffAccounts as $staffAccount):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $staffAccount['StaffAccount']['id']; ?>&nbsp;</td>
		<td><?php echo $staffAccount['StaffAccount']['username']; ?>&nbsp;</td>
		<td><?php echo $staffAccount['StaffAccount']['display_name']; ?>&nbsp;</td>
		<td><?php echo $staffAccount['StaffAccount']['password']; ?>&nbsp;</td>
		<td><?php echo $staffAccount['StaffAccount']['salt']; ?>&nbsp;</td>
		<td><?php echo $staffAccount['StaffAccount']['email']; ?>&nbsp;</td>
		<td><?php echo $staffAccount['StaffAccount']['added']; ?>&nbsp;</td>
		<td><?php echo $staffAccount['StaffAccount']['permissions']; ?>&nbsp;</td>
		<td><?php echo $staffAccount['StaffAccount']['signature']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $staffAccount['StaffAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $staffAccount['StaffAccount']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $staffAccount['StaffAccount']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $staffAccount['StaffAccount']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Staff Account', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Logs', true), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log', true), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Replies', true), array('controller' => 'ticket_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('controller' => 'ticket_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>