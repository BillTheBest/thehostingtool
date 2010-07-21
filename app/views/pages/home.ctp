	<div id="contentbox"> 
        <div id="step2"> 
          <h1>Step 2 - Enter Details</h1> 
          <table width="100%" border="0" cellspacing="0" cellpadding="6"> 
          <tr> 
            <td width="40%" align="left">Username:</td> 
            <td><input type="text" name="textfield" id="user" class="textbox" /></td>
            <td align="center">&nbsp;</td> 
          </tr> 
          <tr> 
            <td>Password:</td> 
            <td><input name="pass" type="password" class="textbox" id="pass" value="lolololol" /></td>
            <td align="center"><?php echo $html->image('accept.png', array('alt' => 'Accepted'))?></td> 
          </tr> 
          <tr> 
            <td>Confirm Password:</td> 
            <td><input type="password" name="user2" id="user2" class="textbox" /></td>
            <td align="center">&nbsp;</td> 
          </tr> 
          <tr> 
            <td>Email:</td> 
            <td><input name="user" type="text" class="textbox" style="" id="email" value="Invalidemail.com" /></td>
            <td align="center"><?php echo $html->image('delete.png', array('alt' => 'Declined'))?></td> 
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