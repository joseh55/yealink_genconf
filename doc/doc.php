
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="Yealink IP phone config file generator tool">
<title><?php //echo $lang['PAGE_TITLE']; ?></title>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<div id="languages">
<a href="doc.php?lang=en"><img src="../images/en.png" /></a>
<?php // <a href="index.php?lang=de"><img src="images/de.png" /></a> ?>
<a href="doc.php?lang=es"><img src="../images/es.png" /></a>
</div>
<div>
<?php
include_once '../common.php';
session_start();

echo "<br> &nbsp <a href=\"../index.php\" class=\"btn btn-primary\" role=\"button\"><i class=\"fa fa-arrow-left fa-lg\"></i> <-- ".$lang['BACK']."</a><br>";


echo $lang['DOC'];


?>
</div>