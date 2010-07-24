<div class="servers index">
	<h2><?php __('Servers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('hostname');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('access_key');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($servers as $server):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $server['Server']['id']; ?>&nbsp;</td>
		<td><?php echo $server['Server']['type']; ?>&nbsp;</td>
		<td><?php echo $server['Server']['hostname']; ?>&nbsp;</td>
		<td><?php echo $server['Server']['username']; ?>&nbsp;</td>
		<td><?php echo $server['Server']['password']; ?>&nbsp;</td>
		<td><?php echo $server['Server']['access_key']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $server['Server']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $server['Server']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $server['Server']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $server['Server']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Server', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('controller' => 'plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan', true), array('controller' => 'plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subdomains', true), array('controller' => 'subdomains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subdomain', true), array('controller' => 'subdomains', 'action' => 'add')); ?> </li>
	</ul>
</div>