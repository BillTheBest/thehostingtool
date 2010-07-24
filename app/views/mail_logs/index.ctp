<div class="mailLogs index">
	<h2><?php __('Mail Logs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('account_id');?></th>
			<th><?php echo $this->Paginator->sort('subject');?></th>
			<th><?php echo $this->Paginator->sort('body');?></th>
			<th><?php echo $this->Paginator->sort('time');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($mailLogs as $mailLog):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $mailLog['MailLog']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mailLog['Account']['username'], array('controller' => 'accounts', 'action' => 'view', $mailLog['Account']['id'])); ?>
		</td>
		<td><?php echo $mailLog['MailLog']['subject']; ?>&nbsp;</td>
		<td><?php echo $mailLog['MailLog']['body']; ?>&nbsp;</td>
		<td><?php echo $mailLog['MailLog']['time']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $mailLog['MailLog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $mailLog['MailLog']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $mailLog['MailLog']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mailLog['MailLog']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mail Log', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>