<div class="customFieldValues index">
	<h2><?php __('Custom Field Values');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('custom_field_id');?></th>
			<th><?php echo $this->Paginator->sort('account_id');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($customFieldValues as $customFieldValue):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $customFieldValue['CustomFieldValue']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customFieldValue['CustomField']['field'], array('controller' => 'custom_fields', 'action' => 'view', $customFieldValue['CustomField']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($customFieldValue['Account']['username'], array('controller' => 'accounts', 'action' => 'view', $customFieldValue['Account']['id'])); ?>
		</td>
		<td><?php echo $customFieldValue['CustomFieldValue']['value']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $customFieldValue['CustomFieldValue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $customFieldValue['CustomFieldValue']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $customFieldValue['CustomFieldValue']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customFieldValue['CustomFieldValue']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Custom Field Value', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Custom Fields', true), array('controller' => 'custom_fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field', true), array('controller' => 'custom_fields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>