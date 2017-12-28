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
 			alert("<?php echo PRUEBA; ?>");
      		return false; 

 		}

 	if(!x1.match(ipformat))

 		{
      		alert("Direccion IP de servidor INVALIDA!"); 
      		return false;  
 		}
 	  else
 		{
      		alert("Puerta de enlace INVALIDA!"); 
      		return false;  
 		}
 
 }



 }  

