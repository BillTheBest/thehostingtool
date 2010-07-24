<div class="p2hForums index">
	<h2><?php __('P2h Forums');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('db_login');?></th>
			<th><?php echo $this->Paginator->sort('db_password');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($p2hForums as $p2hForum):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $p2hForum['P2hForum']['id']; ?>&nbsp;</td>
		<td><?php echo $p2hForum['P2hForum']['name']; ?>&nbsp;</td>
		<td><?php echo $p2hForum['P2hForum']['type']; ?>&nbsp;</td>
		<td><?php echo $p2hForum['P2hForum']['db_login']; ?>&nbsp;</td>
		<td><?php echo $p2hForum['P2hForum']['db_password']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $p2hForum['P2hForum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $p2hForum['P2hForum']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $p2hForum['P2hForum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $p2hForum['P2hForum']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New P2h Forum', true), array('action' => 'add')); ?></li>
	</ul>
</div>