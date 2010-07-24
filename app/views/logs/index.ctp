<div class="logs index">
	<h2><?php __('Logs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('account_id');?></th>
			<th><?php echo $this->Paginator->sort('staff_account_id');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('category');?></th>
			<th><?php echo $this->Paginator->sort('time');?></th>
			<th><?php echo $this->Paginator->sort('message');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($logs as $log):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $log['Log']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($log['Account']['username'], array('controller' => 'accounts', 'action' => 'view', $log['Account']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($log['StaffAccount']['display_name'], array('controller' => 'staff_accounts', 'action' => 'view', $log['StaffAccount']['id'])); ?>
		</td>
		<td><?php echo $log['Log']['type']; ?>&nbsp;</td>
		<td><?php echo $log['Log']['category']; ?>&nbsp;</td>
		<td><?php echo $log['Log']['time']; ?>&nbsp;</td>
		<td><?php echo $log['Log']['message']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $log['Log']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $log['Log']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $log['Log']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $log['Log']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Log', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff Accounts', true), array('controller' => 'staff_accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff Account', true), array('controller' => 'staff_accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>