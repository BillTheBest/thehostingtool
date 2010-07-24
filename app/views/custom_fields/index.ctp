<div class="customFields index">
	<h2><?php __('Custom Fields');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('field');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('options');?></th>
			<th><?php echo $this->Paginator->sort('required');?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($customFields as $customField):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $customField['CustomField']['id']; ?>&nbsp;</td>
		<td><?php echo $customField['CustomField']['field']; ?>&nbsp;</td>
		<td><?php echo $customField['CustomField']['description']; ?>&nbsp;</td>
		<td><?php echo $customField['CustomField']['type']; ?>&nbsp;</td>
		<td><?php echo $customField['CustomField']['options']; ?>&nbsp;</td>
		<td><?php echo $customField['CustomField']['required']; ?>&nbsp;</td>
		<td><?php echo $customField['CustomField']['order']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $customField['CustomField']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $customField['CustomField']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $customField['CustomField']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customField['CustomField']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Custom Field', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Custom Field Values', true), array('controller' => 'custom_field_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field Value', true), array('controller' => 'custom_field_values', 'action' => 'add')); ?> </li>
	</ul>
</div>