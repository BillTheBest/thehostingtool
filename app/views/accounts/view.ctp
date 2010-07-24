<div class="accounts view">
<h2><?php  __('Account');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Salt'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['salt']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Security Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['security_question']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Security Answer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['security_answer']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registered Ip'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['registered_ip']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Ip'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['last_ip']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Extras'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['extras']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Plan'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($account['Plan']['name'], array('controller' => 'plans', 'action' => 'view', $account['Plan']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Domain'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['domain']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registered'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['registered']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['notes']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account', true), array('action' => 'edit', $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Account', true), array('action' => 'delete', $account['Account']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('controller' => 'plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan', true), array('controller' => 'plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Custom Field Values', true), array('controller' => 'custom_field_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field Value', true), array('controller' => 'custom_field_values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs', true), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log', true), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mail Logs', true), array('controller' => 'mail_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mail Log', true), array('controller' => 'mail_logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Replies', true), array('controller' => 'ticket_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('controller' => 'ticket_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Custom Field Values');?></h3>
	<?php if (!empty($account['CustomFieldValue'])):?>
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
		foreach ($account['CustomFieldValue'] as $customFieldValue):
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
<div class="related">
	<h3><?php __('Related Logs');?></h3>
	<?php if (!empty($account['Log'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Account Id'); ?></th>
		<th><?php __('Staff Account Id'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Category'); ?></th>
		<th><?php __('Time'); ?></th>
		<th><?php __('Message'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($account['Log'] as $log):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $log['id'];?></td>
			<td><?php echo $log['account_id'];?></td>
			<td><?php echo $log['staff_account_id'];?></td>
			<td><?php echo $log['type'];?></td>
			<td><?php echo $log['category'];?></td>
			<td><?php echo $log['time'];?></td>
			<td><?php echo $log['message'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'logs', 'action' => 'view', $log['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'logs', 'action' => 'edit', $log['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'logs', 'action' => 'delete', $log['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $log['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Log', true), array('controller' => 'logs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Mail Logs');?></h3>
	<?php if (!empty($account['MailLog'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Account Id'); ?></th>
		<th><?php __('Subject'); ?></th>
		<th><?php __('Body'); ?></th>
		<th><?php __('Time'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($account['MailLog'] as $mailLog):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $mailLog['id'];?></td>
			<td><?php echo $mailLog['account_id'];?></td>
			<td><?php echo $mailLog['subject'];?></td>
			<td><?php echo $mailLog['body'];?></td>
			<td><?php echo $mailLog['time'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'mail_logs', 'action' => 'view', $mailLog['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'mail_logs', 'action' => 'edit', $mailLog['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'mail_logs', 'action' => 'delete', $mailLog['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mailLog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mail Log', true), array('controller' => 'mail_logs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Ticket Replies');?></h3>
	<?php if (!empty($account['TicketReply'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Ticket Id'); ?></th>
		<th><?php __('Account Id'); ?></th>
		<th><?php __('Staff Account Id'); ?></th>
		<th><?php __('Body'); ?></th>
		<th><?php __('Added'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($account['TicketReply'] as $ticketReply):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ticketReply['id'];?></td>
			<td><?php echo $ticketReply['ticket_id'];?></td>
			<td><?php echo $ticketReply['account_id'];?></td>
			<td><?php echo $ticketReply['staff_account_id'];?></td>
			<td><?php echo $ticketReply['body'];?></td>
			<td><?php echo $ticketReply['added'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'ticket_replies', 'action' => 'view', $ticketReply['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'ticket_replies', 'action' => 'edit', $ticketReply['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'ticket_replies', 'action' => 'delete', $ticketReply['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticketReply['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('controller' => 'ticket_replies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
