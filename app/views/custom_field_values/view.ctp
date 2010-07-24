<div class="customFieldValues view">
<h2><?php  __('Custom Field Value');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customFieldValue['CustomFieldValue']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Custom Field'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($customFieldValue['CustomField']['field'], array('controller' => 'custom_fields', 'action' => 'view', $customFieldValue['CustomField']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Account'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($customFieldValue['Account']['username'], array('controller' => 'accounts', 'action' => 'view', $customFieldValue['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customFieldValue['CustomFieldValue']['value']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Custom Field Value', true), array('action' => 'edit', $customFieldValue['CustomFieldValue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Custom Field Value', true), array('action' => 'delete', $customFieldValue['CustomFieldValue']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customFieldValue['CustomFieldValue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Custom Field Values', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field Value', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Custom Fields', true), array('controller' => 'custom_fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field', true), array('controller' => 'custom_fields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
