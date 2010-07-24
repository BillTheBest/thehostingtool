<div class="bannedEmails index">
	<h2><?php __('Banned Emails');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('added');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bannedEmails as $bannedEmail):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $bannedEmail['BannedEmail']['id']; ?>&nbsp;</td>
		<td><?php echo $bannedEmail['BannedEmail']['email']; ?>&nbsp;</td>
		<td><?php echo $bannedEmail['BannedEmail']['type']; ?>&nbsp;</td>
		<td><?php echo $bannedEmail['BannedEmail']['added']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $bannedEmail['BannedEmail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $bannedEmail['BannedEmail']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $bannedEmail['BannedEmail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bannedEmail['BannedEmail']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Banned Email', true), array('action' => 'add')); ?></li>
	</ul>
</div>