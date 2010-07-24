<div class="bannedUsernames index">
	<h2><?php __('Banned Usernames');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('added');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bannedUsernames as $bannedUsername):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $bannedUsername['BannedUsername']['id']; ?>&nbsp;</td>
		<td><?php echo $bannedUsername['BannedUsername']['username']; ?>&nbsp;</td>
		<td><?php echo $bannedUsername['BannedUsername']['type']; ?>&nbsp;</td>
		<td><?php echo $bannedUsername['BannedUsername']['added']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $bannedUsername['BannedUsername']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $bannedUsername['BannedUsername']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $bannedUsername['BannedUsername']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bannedUsername['BannedUsername']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Banned Username', true), array('action' => 'add')); ?></li>
	</ul>
</div>