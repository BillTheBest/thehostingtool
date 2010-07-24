<div class="p2hForums view">
<h2><?php  __('P2h Forum');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $p2hForum['P2hForum']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $p2hForum['P2hForum']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $p2hForum['P2hForum']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Db Login'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $p2hForum['P2hForum']['db_login']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Db Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $p2hForum['P2hForum']['db_password']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit P2h Forum', true), array('action' => 'edit', $p2hForum['P2hForum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete P2h Forum', true), array('action' => 'delete', $p2hForum['P2hForum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $p2hForum['P2hForum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List P2h Forums', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P2h Forum', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
