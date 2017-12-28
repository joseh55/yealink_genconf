<?php
include_once 'common.php';
// VALIDATION OF SOME FIELDS IN FORMS
//====================================
require "./validations.php"; 
//====================================
// DELETE ALL CFG FILES FROM FOLDER
// ===================================
require "./delete_old_files.php"; 
// ===================================

if (!isset($_GET[lang])) { echo "<meta http-equiv=\"refresh\" content=\"0; url=./index.php?lang=en\"/>"; }

?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="Yealink IP phone config file generator tool">
<link rel="shortcut icon" href="./media/favicon.ico" />
<title><?php echo $lang['PAGE_TITLE']; ?></title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
<html>

<div>

<?php 

?>

<div id="languages">
<a href="index.php?lang=en"><img src="images/en.png" /></a>
<?php // <a href="index.php?lang=de"><img src="images/de.png" /></a> ?>
<a href="index.php?lang=es"><img src="images/es.png" /></a>
</div>

<div id="help">


<a href="./doc/doc.php"><img src="images/help.png" title="<?php echo $lang['HELP'] ?>"/></a>


</div>

<center>
<br>

<?php echo $lang['HEADER_TITLE']; ?>

<br>

<img src="./media/yealink_logo.png" alt="" style="width:200px;height:45px;"><br><br>

<form name=formyealink action="upload.php<?php echo "?lang=".$_GET['lang'].""; ?>" method="post" enctype="multipart/form-data"> 

<style type="text/css">


body { background: #f2f2f2 !important; }
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{vertical-align: center, vertical-align:center;font-size:14px;padding:5px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#bbb;color:#594F4F;background-color:#f3fff7;border-top-width:0px;border-bottom-width:0px;}
.tg th{font-family:Ubuntu, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#bbb;color:#493F3F;background-color:#9DE0AD;border-top-width:0px;border-bottom-width:0px;}
.tg .tg-yw4l{vertical-align:top}
</style>
<div>
<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="2"><input type="file" name="archivo" required></th>
  </tr>
  <tr>
    <td valign="center"><?php echo $lang['MODEL']; ?></td>
    <td class="tg-yw4l"><select class="form-control input-sm" name="phone_model"required><option value=""><option value="t20">Yealink T-20</option><option value="t21e2">Yealink T-21 e2</option><option value="t23">Yealink T-23</option><option value="t27">Yealink T-27</option><option value="t42">Yealink T-42</option><option value="w56">Yealink W-56 DECT</option></select></td>
  </tr>
  <tr>
    <td valign="center"><?php echo $lang['SIP_PASS']; ?></td>
    <td class="tg-yw4l"><input class="form-control input-sm" type="text" name="password_sip" required></td>
  </tr>
  <tr>
    <td valign="center"><?php echo $lang['SERVER_IP']; ?></td>
    <td class="tg-yw4l"><input class="form-control input-sm" type="text" name="sip_server" required></td>
  </tr>
   <tr>
    <td valign="center"><?php echo $lang['SERVER_NM']; ?></td>
    <td class="tg-yw4l"><select class="form-control input-sm" name="netmask"required><option value=""><option value="255.255.255.0">/24 (255.255.255.0)</option><option value="255.255.254.0">/23 (255.255.254.0)</option></select></td>
  </tr>
  <tr>
    <td valign="center"><?php echo $lang['SERVER_GW']; ?></td>
    <td class="tg-yw4l"><input class="form-control input-sm" type="text" name="gw"></td>
  </tr>
   <tr>
    <td valign="center"><?php echo $lang['PHONE_VLAN']; ?> &nbsp &nbsp &nbsp<input type="checkbox" id="vlan_en" name="vlan_enable" value="1" onclick="enableDisableTextFields();"/></td>
    <td class="tg-yw4l"><input class="form-control input-sm" type="text" id="vlan" name="vlan" disabled /></td>
  </tr>
  <tr>
    <td valign="center"><?php echo $lang['PHONE_PW']; ?> &nbsp<input type="checkbox" id="pwadmin_en" name="pwadmin_enable" value="1" onclick="enableDisableTextFields();"/></td>
    <td class="tg-yw4l"><input class="form-control input-sm" type="text" id="pwad" name="pwad" disabled /></td>
  </tr>
  <tr>
    <th class="tg-yw4l" colspan="2"><center><input class="btn btn-primary btn-block" type="submit" value="<?php echo $lang['SUBMIT']; ?>" onclick="return ValidateIPaddress()"></center></td>
    
  </tr> 

</table>
<div>
</form>

</center>


</body>
</html>
<div>
<?php //echo $lang['DOC']; ?>