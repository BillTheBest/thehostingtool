<div class="subdomains index">
	<h2><?php __('Subdomains');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('domain');?></th>
			<th><?php echo $this->Paginator->sort('server_id');?></th>
			<th><?php echo $this->Paginator->sort('available');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($subdomains as $subdomain):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $subdomain['Subdomain']['id']; ?>&nbsp;</td>
		<td><?php echo $subdomain['Subdomain']['domain']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subdomain['Server']['hostname'], array('controller' => 'servers', 'action' => 'view', $subdomain['Server']['id'])); ?>
		</td>
		<td><?php echo $subdomain['Subdomain']['available']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $subdomain['Subdomain']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subdomain['Subdomain']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $subdomain['Subdomain']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subdomain['Subdomain']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subdomain', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Servers', true), array('controller' => 'servers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Server', true), array('controller' => 'servers', 'action' => 'add')); ?> </li>
	</ul>
</div>