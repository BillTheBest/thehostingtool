<div class="bannedIps index">
	<h2><?php __('Banned Ips');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('ip');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('added');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bannedIps as $bannedIp):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $bannedIp['BannedIp']['id']; ?>&nbsp;</td>
		<td><?php echo $bannedIp['BannedIp']['ip']; ?>&nbsp;</td>
		<td><?php echo $bannedIp['BannedIp']['type']; ?>&nbsp;</td>
		<td><?php echo $bannedIp['BannedIp']['added']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $bannedIp['BannedIp']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $bannedIp['BannedIp']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $bannedIp['BannedIp']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bannedIp['BannedIp']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Banned Ip', true), array('action' => 'add')); ?></li>
	</ul>
</div>