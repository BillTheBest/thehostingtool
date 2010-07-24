<div class="accounts index">
	<h2><?php __('Accounts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('salt');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('security_question');?></th>
			<th><?php echo $this->Paginator->sort('security_answer');?></th>
			<th><?php echo $this->Paginator->sort('registered_ip');?></th>
			<th><?php echo $this->Paginator->sort('last_ip');?></th>
			<th><?php echo $this->Paginator->sort('extras');?></th>
			<th><?php echo $this->Paginator->sort('plan_id');?></th>
			<th><?php echo $this->Paginator->sort('domain');?></th>
			<th><?php echo $this->Paginator->sort('registered');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($accounts as $account):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $account['Account']['id']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['username']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['password']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['salt']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['email']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['security_question']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['security_answer']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['registered_ip']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['last_ip']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['extras']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($account['Plan']['name'], array('controller' => 'plans', 'action' => 'view', $account['Plan']['id'])); ?>
		</td>
		<td><?php echo $account['Account']['domain']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['registered']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['status']; ?>&nbsp;</td>
		<td><?php echo $account['Account']['notes']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $account['Account']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $account['Account']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $account['Account']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $account['Account']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Account', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('controller' => 'plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan', true), array('controller' => 'plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Custom Field Values', true), array('controller' => 'custom_field_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field Value', true), array('controller' => 'custom_field_values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs', true), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log', true), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mail Logs', true), array('controller' => 'mail_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mail Log', true), array('controller' => 'mail_logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Replies', true), array('controller' => 'ticket_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('controller' => 'ticket_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>