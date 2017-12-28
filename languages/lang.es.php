<?php
/* 
-----------------
Language: Spanish
-----------------
*/

$lang = array();

$lang['PAGE_TITLE'] = 'Generador de archivos de configuracion Yealink';
$lang['HEADER_TITLE'] = '<h6>Generador de archivos de configuracion para telefonos IP Yealink<br>ORIENTADO A CONFIGURACION POR MAC</h6>';

$lang['HELP'] = 'Ayuda y documentacion ';

// Menu

$lang['MENU_HOME'] = 'Inicio';
$lang['MENU_ABOUT_US'] = 'Sobre Nosotros';
$lang['MENU_OUR_PRODUCTS'] = 'Nuestros productos';
$lang['MENU_CONTACT_US'] = 'Contáctenos';
$lang['MENU_ADVERTISE'] = 'Publicidad';
$lang['MENU_SITE_MAP'] = 'Mapa del Sitio';

//My Vars HOME PAGE

$lang['MODEL'] = 'Modelo:';
$lang['SIP_PASS'] = 'Contrasena SIP:';
$lang['SERVER_IP'] = 'IP servidor:';
$lang['SERVER_NM'] = 'Mascara:';
$lang['SERVER_GW'] = 'Puerta Enlace:';
$lang['PHONE_VLAN'] = 'VLAN:';
$lang['PHONE_PW'] = 'Password<br>Telefono:';
$lang['SUBMIT'] = 'Generar';
$lang['BACK'] = ' Regresar ';

//My Vars PROCEDED DATA PAGE

$lang['MSG1'] = 'Archivo procesado!';
$lang['CREATED_FILE'] = 'Creado el archivo';
$lang['EXTEN_MSG'] = 'EXT: ';
$lang['IP_MSG'] = 'direccion IP: ';
$lang['CREATEDMSG1'] = 'Creados ';
$lang['CREATEDMSG2'] = ' archivos de configuracion para Yealink ';
$lang['ZIPPED'] = 'Descargar archivos comprimidos (.zip) ';
$lang['HERE'] = ' AQUI ';

//Alerts

$lang['ALERT_GW_IP'] = 'Los valores de PUERTA DE ENLACE e IP SERVIDOR son INVALIDOS';
$lang['ALERT_IP'] = 'Direccion IP de servidor INVALIDA';
$lang['ALERT_GW'] = 'Puerta de enlace INVALIDA';

//errors

$lang['ROW'] = ' EN FILA # ';
$lang['BLANK'] = "&nbsp &nbsp &nbsp &nbsp" ;
$lang['FIELDS_ERR'] = ' ';
$lang['EMPTY'] = ' &nbsp &nbsp &nbsp VACIO(S) ';
$lang['ALL_EMPTY'] = ' TODOS LOS CAMPOS ESTAN VACIOS ';
$lang['ERR_MSG'] = 'Abra el archivo CSV y <b>corrija</b> los errores descritos';

//fields of CSV FILE

$lang['IP_PHONE'] = 'Direccion IP, ';
$lang['MAC_PHONE'] = 'Direcion MAC, ';
$lang['EXT_PHONE'] = 'Extension, ';

//Docs
$lang['DOC'] =
'
=========================================================================================================<br>
<b>Generador de archivos de configuracion para telefonos IP Yealink ORIENTADO A CONFIGURACION POR MAC</b><br>
=========================================================================================================<br>
Autor:<br>
Jose Miguel Marcano Mendoza<br>
jose@marcano.net.ve<br>
Apache 2.0 Licence<br>
============================================================<br>
<br>
Esta herramienta simple esta destinada para facilitar el proceso de configuracion automatica en telefonos ip Yealink. En escenarios generalmente empresariales donde hay gran cantidad de telefonos para instalar es necesario este procedimiento ya que la configuracion manual o via web de cada terminal es repetitivo y demora mucho el proceso. Cada telefono Yealink tiene un numero de MAC asignado, y esta herramienta al proveerle los datos necesarios genera un archivo .cfg de configuracion UNICO para cada telefono. que posteriormente al enceder y conectar el telefono a la red este ubica su archivo unico de configuracion y la aplica en pocos segundos, sin la necesidad de realizar ajustes manuales en cada dispositivo<br> 
<br>
El proceso es el siguiente:<br>

1- Se crea un archivo CSV (puede utilizarse Libre Office) con tres columnas en el siguiente orden:<br>
	MAC, Numero de Extension e IP<br>
<br>
<img src="../images/csv.png" alt="CSV File"><br>
<br>
Puede descargar un <b>ARCHIVO DE MUESTRA</b> <b><a href="../sample/file.csv">AQUI</a></b><br>
<br>
	El proceso de recopilacion de MAC de todos los telefonos se facilita utilizando un lector de codigos de barras USB,<br>
	ya que cada telefono en su caja y en la parte posterior posee un sticker con este dato.<br>
<br>
2- Subir el archivo CSV al aplicativo WEB y seleccionar los datos en el formulario (estos datos son generales para todos los equipos contenidos en el archivo) como direccion IP del servidor, contraseña SIP, mascara, gateway, VLAN y passowrd de administracion de telefono (si aplican)<br>
<br>
<img src="../images/form_es.png" alt="Yealink config generator tool"><br>
<br>
3- Pulsar el boton GENERAR<br>
<br>
	- En la siguiente pantalla se muestra el resultado donde indica los archivos generados y detalle de la extension y direccion IP asignada a cada MAC.<br>
<br>
<img src="../images/process_es.png" alt="Yealink config generator tool"><br>
<br>
	- Permite descargar todos los archivos generados en un comprimido (.zip)<br>
<br>
	- La herramienta realiza una comprobacion de campos vacios en las tres columnas, si se detecta un error lo muestra en la interfaz, debe corregirse y volver a subir el archivo
<br>
===========================================================<br>
<br>
DATOS TECNICOS:<br>
<br>
En esta version por defecto es posible elegir entre cuatro modelos de dispositivos:<br>
<br>
T-20<br>
T21-E2<br>
T23<br>
T42<br>

Si requiere manipular alguna opcion de configuracion en especifico, puede editar a mano los archivos ubicados en: cfg de acuerdo a sus necesidades, por ejemplo.. cambiar la zona horaria (por defecto esta para Colombia), asignacion de botones..  u otras opciones generales.<br>
<br>
============================================================<br>
<br>
Esta herramienta esta creada para ser modificada de acuerdo a sus necesidades, si necesitas ayuda.. requieres el codigo FUENTE escribeme y con gusto te atendere
============================================================<br>
jose@marcano.net.ve<br>
============================================================<br>
<br>
';
?>