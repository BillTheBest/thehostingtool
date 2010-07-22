	<div id="contentbox"> 
        <div id="step2"> 
          <h1>Step 2 - Enter Details</h1> 
          <table width="100%" border="0" cellspacing="0" cellpadding="6"> 
          <tr> 
            <td width="40%" align="left">Username:</td> 
            <td><input type="text" name="textfield" id="user" class="textbox" /></td>
          </tr> 
          <tr> 
            <td>Password:</td> 
            <td><input name="pass" type="password" class="accepted" id="pass" value="lolololol" /></td>
          </tr> 
          <tr> 
            <td>Confirm Password:</td> 
            <td><input type="password" name="user2" id="user2" class="textbox" /></td>
            <td align="center">&nbsp;</td> 
          </tr> 
          <tr> 
            <td>Email:</td> 
            <td><input name="user" type="text" class="declined" style="" id="email" value="Invalidemail.com" /></td>
          </tr> 
          </table> 
    </div></div> 
    <div id="buttonbox"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0"> 
        <tr>
          <td width="50%"><input type="submit" name="previous" id="previous" value="Previous Step" class="button" /></td> 
          <td align="right"><input type="submit" name="previous2" id="previous2" value="Next Step" class="button" /></td> 
        </tr> 
      </table> 
    </div>
<h3>CakePHP Debug Info and Such:</h3>
(mainly so you can tell if you have everything setup correctly)
<?php
if (Configure::read() > 0):
	Debugger::checkSecurityKeys();
endif;
?>
<p>
	<?php
		if (is_writable(TMP)):
			echo '<span class="notice success">';
				__('Your tmp directory is writable.');
			echo '</span>';
		else:
			echo '<span class="notice">';
				__('Your tmp directory is NOT writable.');
			echo '</span>';
		endif;
	?>
</p>
<p>
	<?php
		$settings = Cache::settings();
		if (!empty($settings)):
			echo '<span class="notice success">';
					printf(__('The %s is being used for caching. To change the config edit APP/config/core.php ', true), '<em>'. $settings['engine'] . 'Engine</em>');
			echo '</span>';
		else:
			echo '<span class="notice">';
					__('Your cache is NOT working. Please check the settings in APP/config/core.php');
			echo '</span>';
		endif;
	?>
</p>
<p>
	<?php
		$filePresent = null;
		if (file_exists(CONFIGS.'database.php')):
			echo '<span class="notice success">';
				__('Your database configuration file is present.');
				$filePresent = true;
			echo '</span>';
		else:
			echo '<span class="notice">';
				__('Your database configuration file is NOT present.');
				echo '<br/>';
				__('Rename config/database.php.default to config/database.php');
			echo '</span>';
		endif;
	?>
</p>
<?php
if (isset($filePresent)):
	if (!class_exists('ConnectionManager')) {
		require LIBS . 'model' . DS . 'connection_manager.php';
	}
	$db = ConnectionManager::getInstance();
	@$connected = $db->getDataSource('default');
?>
<p>
	<?php
		if ($connected->isConnected()):
			echo '<span class="notice success">';
	 			__('Cake is able to connect to the database.');
			echo '</span>';
		else:
			echo '<span class="notice">';
				__('Cake is NOT able to connect to the database.');
			echo '</span>';
		endif;
	?>
</p>
<?php endif;?>