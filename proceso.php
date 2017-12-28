<html>
<body bgcolor="#E6E6FA">
<center>

<br>
<br>
<br>

<img src="./media/yealink_logo.png" alt="" style="width:200px;height:45px;"><br><br> 

<?php
session_start();

//echo $_SESSION['model'];

$phone_model = $_SESSION['model'];
$pass_sip = $_SESSION['passw_sip'];
$sip_server = $_SESSION['sip_server'];
$netmask = $_SESSION['netmask'];
$gw = $_SESSION['gw'];
$vlan_enable = $_SESSION['vlan_enable'];
$vlan = $_SESSION['vlan'];
$pwadmin_enable = $_SESSION['pwadmin_enable'];
$pwad = $_SESSION['pwad'];


$error_var = 0;

// PRUEBAS DE COMPROBACION DE VARIABLES y DEBUG

//echo $phone_model;
//echo $pass_sip;
//echo $sip_server;
//echo $netmask;
//echo $gw;
//echo "Habilitado " .$vlan_enable . "Numero " . $vlan;
//echo $gw;
//echo $pwad;
//echo $pwadmin_enable;
//echo $_SESSION['pwadmin_enable'];
//echo "Valor POST" .$_POST['pwad']. " Valor Sesion " .$_SESSION['pwad']. " Valor pw enable" .$_SESSION['pwadmin_enable']. "";

?>

 			<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#bbb;}
.tg td{font-family:Ubuntu;, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#e0e0e0;color:#594F4F;background-color:#f3fff7;border-top-width:.5px;border-bottom-width:.5px;}
.tg th{font-family:Ubuntu;, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#bbb;color:#493F3F;background-color:#9DE0AD;border-top-width:0px;border-bottom-width:0px;}
.tg .tg-yw4l{vertical-align:top}
</style>
<table class="tg">
  <tr>
     <th class="tg-yw4l" colspan="2"><?php echo $lang['MSG1']; ?></th>
  </tr>


<?php

$file_handle = fopen(''.constant("UPLOAD_DIR").''.$csvfile["name"].'', "r"); // MANEJO DE ARCHIVO PARA COMPROBACION DE ERRORES EN ARCHIVO INICIAL

$file_handle2 = fopen(''.constant("UPLOAD_DIR").''.$csvfile["name"].'', "r"); // MANEJO DE ARCHIVO PARA SEGUNDO WHILE (CREADOR DE ARCHIVOS)
$count = 0;


while (!feof($file_handle) ) 

	{

	$count++;
	unset($mac_csv, $ext_csv, $ip_csv);	

$line_of_text = fgetcsv($file_handle, 1024);

	if (empty($line_of_text[0]) || empty($line_of_text[1]) || empty($line_of_text[2]) && (!feof($file_handle)))

		{

			if (empty($line_of_text[0]) && empty($line_of_text[1]) && empty($line_of_text[2]) && (!feof($file_handle)))

					{

			echo "<tr>\n";
			echo "<td class=\"tg-yw4l\"><font color = \"red\">ERROR ! </font>".$lang['ROW']."<b>".$count."</b>".$lang['BLANK']."".$lang['ALL_EMPTY']." </td>\n";
			echo "<td class=\"tg-yw4l\"></td>\n";
			$error_var = true;
			
					}

			else

						{


			if (empty($line_of_text[0]) && !feof($file_handle)) // COMPROBACION DE CAMPO MAC VACIO EN  ARCHIVO
			
						{

				$mac_csv = $lang['MAC_PHONE'];
				$error_var = 1;
						
						}

			if (empty($line_of_text[1]) && !feof($file_handle)) // COMPROBACION DE CAMPO EXTENSION VACIO EN  ARCHIVO
			
						{

				$ext_csv = $lang['EXT_PHONE'];
				$error_var = 1;

						}

			if (empty($line_of_text[2]) && !feof($file_handle)) // COMPROBACION DE CAMPO DIRECCION IP VACIO EN  ARCHIVO
			
						{

				$ip_csv = $lang['IP_PHONE'];
				$error_var = 1;
						
						}


				if  (!feof($file_handle))

						{
				
			
			echo "<tr>\n";
			echo "    <td class=\"tg-yw4l\"><font color = \"red\">ERROR ! </font>".$lang['ROW']."<b>".$count."</b>".$lang['BLANK']."".$lang['FIELDS_ERR']."".$mac_csv." ".$ext_csv." ".$ip_csv."".$lang['EMPTY']."</td>\n";
			echo "    <td class=\"tg-yw4l\"></td>\n";

				}
			
			}

		}
			
	}


	 		//echo $error_var;


	 		if ($error_var == 0)  // SI NO HAY ERRORES EN ARCHIVO PROCEDE AL PROCESO DE CREACION


	 					{
	 			//echo $error_var;
				while (!feof($file_handle2))

		 					{

					$count2++;
					
					unset($mac_csv, $ext_csv, $ip_csv);	
					$line_of_text2 = fgetcsv($file_handle2, 1024);


						if (!empty($line_of_text2[0]) && !empty($line_of_text2[1]) && !empty($line_of_text2[2]))

								{

					echo "<tr>\n";
					echo "    <td class=\"tg-yw4l\">&nbsp ".$lang['CREATED_FILE']." &nbsp<a href=\"cfg/".strtolower($line_of_text2[0]).'.cfg" target = "_blank">'.strtolower($line_of_text2[0]).'.cfg</a>&nbsp &nbsp '.$lang['EXTEN_MSG'].' '. $line_of_text2[1].'&nbsp &nbsp '.$lang['IP_MSG'].' '. $line_of_text2[2] ."</td>\n";
					echo "    <td class=\"tg-yw4l\"></td>\n";

		
									if ($phone_model == "t20" && !feof($file_handle2))

									{
										require('./models/t20.php');

									}

									if ($phone_model == "t21e2" && !feof($file_handle2)) 

									{
										//echo $line_of_text2[2];
										//echo "PRUEBA";
										require('./models/t21e2.php');

									}

									if ($phone_model == "t23" && !feof($file_handle2))

									{
										require('./models/t23.php');

									}

									if ($phone_model == "t27" && !feof($file_handle2))

									{
										require('./models/t27.php');

									}

									if ($phone_model == "t42" && !feof($file_handle2))

									{
										require('./models/t42.php');

									}

									if ($phone_model == "w56" && !feof($file_handle2))

									{
										require('./models/w56.php');

									}

									
								
								}
								
							}

						}
			
			$files_created = ($count -1);
			echo "<tr>\n";



			if ($error_var == 0)

			{

			echo "    <td class=\"tg-yw4l\"><center><font size=\"2\">".$lang['CREATEDMSG1']."<font color = \"green\"><b>(".$files_created.")</b></font>".$lang['CREATEDMSG2']."".strtoupper($phone_model)."<br>".$lang['ZIPPED']."<a href=\"compress.php\" target=\"_blank\">".$lang['HERE']."</a> </font></center></td>\n";

			}


			else

			{
				echo "<td class=\"tg-yw4l\"><center><font size=\"2\">".$lang['ERR_MSG']."</font></center></td>\n";
			}

			
			echo "    <td class=\"tg-yw4l\"></td>\n";


					?>
		<tr>
   			<th class="tg-yw4l" colspan="2" valign="middle"><a href="./index.php?lang=<?php echo $_GET[lang];?>"><img src="<?php switch ($_GET[lang]) {case "en": echo "./media/back_button.png"; break; case "es": echo "./media/back_button_es.png"; break; default: echo "Error!";}?>" alt="" style="width:100px;height:27px;"></th>
  		</tr>
		</tr>
	</table>

<?php
fclose($file_handle);
session_destroy();
?>
</center>
</body>
</html>

<!--<a href="zip_folder.php"><img border="0" alt="W3Schools" src="media/zip.png" width="60" height="49">-->


<?php // switch ($_GET[lang]) {case "en": echo "./media/back_button.png"; break; case "es": echo "./media/regresar_blue.png"; break; default: echo "Error!";}?>