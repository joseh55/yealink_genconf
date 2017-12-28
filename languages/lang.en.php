<?php
/* 
------------------
Language: English
------------------
*/

$lang = array();

$lang['PAGE_TITLE'] = 'Yealink config file generator tool';
$lang['HEADER_TITLE'] = '<h6>MAC ORIENTED config file generator tool<br>for Yealink IP phones</h6>';

$lang['HELP'] = ' Help and Documentation';

// Menu

$lang['MENU_HOME'] = 'Home';
$lang['MENU_ABOUT_US'] = 'About Us';
$lang['MENU_OUR_PRODUCTS'] = 'Our products';
$lang['MENU_CONTACT_US'] = 'Contact Us';
$lang['MENU_ADVERTISE'] = 'Advertise';
$lang['MENU_SITE_MAP'] = 'Site Map';

//My Vars HOME PAGE

$lang['MODEL'] = 'Model:';
$lang['SIP_PASS'] = 'SIP password: &nbsp&nbsp';
$lang['SERVER_IP'] = 'Server IP:';
$lang['SERVER_NM'] = 'Netmask:';
$lang['SERVER_GW'] = 'Gateway:';
$lang['PHONE_VLAN'] = 'VLAN:';
$lang['PHONE_PW'] = 'Phone PW:';
$lang['SUBMIT'] = 'Generate';
$lang['BACK'] = ' Back ';

//My Vars PROCEDED DATA PAGE

$lang['MSG1'] = 'Procesed file!';
$lang['CREATED_FILE'] = 'Created config file';
$lang['EXTEN_MSG'] = 'EXT: ';
$lang['IP_MSG'] = 'IP addr: ';
$lang['CREATEDMSG1'] = 'Created ';
$lang['CREATEDMSG2'] = ' configuration files for Yealink ';
$lang['ZIPPED'] = 'Download Zipped files (.zip format) ';
$lang['HERE'] = ' HERE ';


//Alerts

$lang['ALERT_GW_IP'] = 'INVALID GATEWAY AND SERVER IP ADDRESS';
$lang['ALERT_IP'] = 'INVALID SERVER IP VALUE'; 
$lang['ALERT_GW'] = 'INVALID GATEWAY VALUE';

//errors

$lang['ROW'] = ' IN ROW # ';
$lang['BLANK'] = "&nbsp &nbsp &nbsp &nbsp" ;
$lang['FIELDS_ERR'] = ' ';
$lang['EMPTY'] = ' &nbsp &nbsp &nbsp EMPTY ';
$lang['ALL_EMPTY'] = ' ALL FIELDS ARE EMPTY ';
$lang['ERR_MSG'] = 'Open CSV file and <b>FIX</b> described errors';

//fields of CSV FILE

$lang['IP_PHONE'] = 'IP Address, ';
$lang['MAC_PHONE'] = 'MAC Address, ';
$lang['EXT_PHONE'] = 'Extension, ';

//doc

$lang['DOC'] =

'
============================================================<br>
<b>MAC ORIENTED config file generator tool for Yealink IP phones </b><br>
============================================================<br>
Author:<br>
Jose Miguel Marcano Mendoza<br>
jose@marcano.net.ve<br>
Apache 2.0 Licence<br>
============================================================<br>
<br>

This simple tool is intended to facilitate the process of automatic configuration in Yealink ip telephones. In general business scenarios where there is a large number of phones to install this procedure is necessary since the manual or web configuration of each terminal is repetitive and delays the process a lot. Each Yealink phone has an assigned MAC number, and this tool, by providing the necessary data, generates a .cfg file of UNIQUE configuration for each telephone. that after turning on and connecting the phone to the network it locates its unique configuration file and applies it in a few seconds, without the need to make manual adjustments on each device<br>
<br>
The process is the following:<br>
<br>
1- A CSV file is needed <br>
(Libre Office can be used) with three columns in the following order:<br>
MAC, Extension Number and IP<br>
<br>
<img src="../images/csv.png" alt="CSV File"><br>
<br>
<b>SAMPLE FILE</b> can be downloaded <b><a href="../sample/file.csv">HERE</a></b><br>
<br>
The MAC collection process of all the phones is easier using a USB bar code reader,<br>
since each phone in its box and on the back has a sticker with this data.<br>
<br>
2- Upload the CSV file to the WEB application and select the data in the form (this data is general for all the equipment contained in the file) as server IP address, SIP password, mask, gateway and VLAN (if applicable)<br>
<br>
<img src="../images/form_en.png" alt="Yealink config generator tool"><br>
<br>
3- Press the Submit button<br>
<br>
- The next screen shows the result where it indicates the generated files and details of the extension and IP address assigned to each MAC.<br>
<br>
<img src="../images/process_en.png" alt="Yealink config generator tool"><br>

<br>
- It allows to download all the generated configuration files of each phone contained in a compressed file (.zip)<br>
<br>
- The tool performs a check of empty fields in the three columns, if an error is detected, it must be corrected and the file re-uploaded
<br>
==================================================================================================== 
<br>
TECHNICAL DATA:<br>
====================================================================================================
<br>
In this version it is possible to choose between four device models:<br>
<br>
Yealink T-20<br>
Yealink T21-E2<br>
Yealink T23<br>
Yealink T42<br>

<br>
If you need to manipulate a specific configuration option, add a model.. etc, you can manually edit the files located in: cfg directory according to your needs, for example .. change the time zone (default is for Colombia), button assignment .. or other options general.
<br>
if you have questions or requeriments.. Please contact ME! :)
=========================================================<br>
<br>
This tool is created to be modified according to your needs, if you need help .. you need the code SOURCE write me and I will gladly take care of you 
=========================================================<br>
jose@marcano.net.ve<br>
=========================================================<br>
<br>
';


?>