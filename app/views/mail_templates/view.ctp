<div class="mailTemplates view">
<h2><?php  __('Mail Template');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mailTemplate['MailTemplate']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mailTemplate['MailTemplate']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subject'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mailTemplate['MailTemplate']['subject']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Body'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mailTemplate['MailTemplate']['body']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mail Template', true), array('action' => 'edit', $mailTemplate['MailTemplate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Mail Template', true), array('action' => 'delete', $mailTemplate['MailTemplate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mailTemplate['MailTemplate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mail Templates', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mail Template', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
