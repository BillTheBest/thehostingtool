<div class="customFields view">
<h2><?php  __('Custom Field');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customField['CustomField']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customField['CustomField']['field']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customField['CustomField']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customField['CustomField']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Options'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customField['CustomField']['options']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Required'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customField['CustomField']['required']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customField['CustomField']['order']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Custom Field', true), array('action' => 'edit', $customField['CustomField']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Custom Field', true), array('action' => 'delete', $customField['CustomField']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customField['CustomField']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Custom Fields', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Custom Field Values', true), array('controller' => 'custom_field_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field Value', true), array('controller' => 'custom_field_values', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Custom Field Values');?></h3>
	<?php if (!empty($customField['CustomFieldValue'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Custom Field Id'); ?></th>
		<th><?php __('Account Id'); ?></th>
		<th><?php __('Value'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customField['CustomFieldValue'] as $customFieldValue):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $customFieldValue['id'];?></td>
			<td><?php echo $customFieldValue['custom_field_id'];?></td>
			<td><?php echo $customFieldValue['account_id'];?></td>
			<td><?php echo $customFieldValue['value'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'custom_field_values', 'action' => 'view', $customFieldValue['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'custom_field_values', 'action' => 'edit', $customFieldValue['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'custom_field_values', 'action' => 'delete', $customFieldValue['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customFieldValue['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Custom Field Value', true), array('controller' => 'custom_field_values', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
