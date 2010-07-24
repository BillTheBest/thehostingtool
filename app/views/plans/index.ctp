<div class="plans index">
	<h2><?php __('Plans');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('backend');?></th>
			<th><?php echo $this->Paginator->sort('server_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('post_reg');?></th>
			<th><?php echo $this->Paginator->sort('post_month');?></th>
			<th><?php echo $this->Paginator->sort('admin');?></th>
			<th><?php echo $this->Paginator->sort('hidden');?></th>
			<th><?php echo $this->Paginator->sort('disabled');?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($plans as $plan):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $plan['Plan']['id']; ?>&nbsp;</td>
		<td><?php echo $plan['Plan']['type']; ?>&nbsp;</td>
		<td><?php echo $plan['Plan']['backend']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($plan['Server']['hostname'], array('controller' => 'servers', 'action' => 'view', $plan['Server']['id'])); ?>
		</td>
		<td><?php echo $plan['Plan']['name']; ?>&nbsp;</td>
		<td><?php echo $plan['Plan']['description']; ?>&nbsp;</td>
		<td><?php echo $plan['Plan']['post_reg']; ?>&nbsp;</td>
		<td><?php echo $plan['Plan']['post_month']; ?>&nbsp;</td>
		<td><?php echo $plan['Plan']['admin']; ?>&nbsp;</td>
		<td><?php echo $plan['Plan']['hidden']; ?>&nbsp;</td>
		<td><?php echo $plan['Plan']['disabled']; ?>&nbsp;</td>
		<td><?php echo $plan['Plan']['order']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $plan['Plan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $plan['Plan']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $plan['Plan']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $plan['Plan']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Plan', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Servers', true), array('controller' => 'servers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Server', true), array('controller' => 'servers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>