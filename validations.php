<?php?>
<script src="./extra/enable_fields.js"></script>
<script type="text/javascript">

function ValidateIPaddress()  
 {  
 var ipformat = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;  
 var x1=document.forms["formyealink"]["sip_server"].value;
 var x2=document.forms["formyealink"]["gw"].value;

 if(x1.match(ipformat) && x2.match(ipformat))  
 {  
 document.formyealink.sip_server.focus();  
 return true;  
 }  
 else
 {  


  if(!x1.match(ipformat) && !x2.match(ipformat))

    {
      alert("<?php echo $lang['ALERT_GW_IP']; ?>");
          return false; 

    }

  if(!x1.match(ipformat))

    {
          alert("<?php echo $lang['ALERT_IP']; ?>");
          return false;  
    }
    else
    {
          alert("<?php echo $lang['ALERT_GW']; ?>");
          return false;  
    }
 
 }

 } 

 </script> 