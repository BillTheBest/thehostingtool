<?php
//////////////////////////////
// The Hosting Tool
// SQL Config
// By Jonny H
// Released under the GNU-GPL
//////////////////////////////

//Are we being called by the script?
if(THT != 1){die("FATAL: Trying to hack?");}

//MAIN SQL CONFIG - Change values accordingly
$sql['host'] = "thehostingtool.com"; #The mySQL Host, usually default - localhost
$sql['user'] = "tht_trunk"; #The mySQL Username
$sql['pass'] = "UQPbqWv8323ZUa3F"; #The mySQL Password
$sql['db'] = "tht_trunk"; #The mySQL DB, remember to have your username prefix
$sql['pre'] = "tht_"; #The mySQL Prefix, usually default unless otherwise

//LEAVE
$sql['install'] = true;
?>