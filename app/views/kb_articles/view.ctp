<div class="kbArticles view">
<h2><?php  __('Kb Article');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kbArticle['KbArticle']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Kb Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($kbArticle['KbCategory']['name'], array('controller' => 'kb_categories', 'action' => 'view', $kbArticle['KbCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kbArticle['KbArticle']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kbArticle['KbArticle']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kbArticle['KbArticle']['order']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Kb Article', true), array('action' => 'edit', $kbArticle['KbArticle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Kb Article', true), array('action' => 'delete', $kbArticle['KbArticle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $kbArticle['KbArticle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Kb Articles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kb Article', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kb Categories', true), array('controller' => 'kb_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kb Category', true), array('controller' => 'kb_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
