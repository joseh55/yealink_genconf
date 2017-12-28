<?php
include_once 'common.php';
//======================================================================================
session_start();

$_SESSION['model'] = $_POST["phone_model"];
$_SESSION['passw_sip'] = $_POST["password_sip"];
$_SESSION['sip_server'] = $_POST["sip_server"];
$_SESSION['netmask'] = $_POST["netmask"];
$_SESSION['gw'] = $_POST["gw"];
$_SESSION['lang'] = $_POST["lang"];


//=====================================================================================================
//  COMPROBACION DE CHECKBOX EN VLAN Y ASIGNACION DE VALOR ============================================

    if  (isset($_POST["vlan_enable"]))//(isset($_POST["vlan_enable"]) && !empty($_POST["vlan_enable"]))

    {
     $_SESSION['vlan_enable'] = '1'; 
     $_SESSION['vlan'] = $_POST["vlan"];
    }

    else 

    {
      $_SESSION['vlan_enable'] = '0';
      $_SESSION['vlan'] = '0';

    }    


    if  (isset($_POST["pwadmin_enable"]))//(isset($_POST["vlan_enable"]) && !empty($_POST["vlan_enable"]))

    {
     //$_SESSION['pwadmin_enable'] = '1'; 
     $_SESSION['pwad'] = $_POST["pwad"];
    }

    else 

    {
     
        // NO HAY ACCIONES PARA HACER...
      //$_SESSION['vlan_enable'] = '0';
      //$_SESSION['vlan'] = '0';
    }    


//=======================================================================================================


define("UPLOAD_DIR", "./uploads/");

if (!empty($_FILES["archivo"])) {
    $csvfile = $_FILES["archivo"];

    if ($csvfile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>Ha ocurrido un error</p>";
        exit;
    }

    // Nombre de archivo seguro
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $csvfile["name"]);

    // No sobre escribir archivos existentes
    /*$i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
    */
    // Preservar archivo del directorio temporal
    $success = move_uploaded_file($csvfile["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) { 
        echo "<p>Error guardando archivo.</p>";
        exit;
    }

    else 

        { 

           
            //$ppp = constant("UPLOAD_DIR");
            //echo $ppp;
            //echo $csvfile["name"];
            require('proceso.php');

            

        }

    // Set de permisologia al nuevo archivo
    chmod(UPLOAD_DIR . $name, 0755);
}