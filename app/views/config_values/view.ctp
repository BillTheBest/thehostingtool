<div class="configValues view">
<h2><?php  __('Config Value');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $configValue['ConfigValue']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $configValue['ConfigValue']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $configValue['ConfigValue']['value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Added'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $configValue['ConfigValue']['added']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Updated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $configValue['ConfigValue']['updated']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Config Value', true), array('action' => 'edit', $configValue['ConfigValue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Config Value', true), array('action' => 'delete', $configValue['ConfigValue']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $configValue['ConfigValue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Config Values', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config Value', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
