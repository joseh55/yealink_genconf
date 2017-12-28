<?php

$fp = fopen('cfg/'.strtolower($line_of_text2[0]).'.cfg', 'w');
fwrite($fp, 

'#!version:1.0.0.1
handset.1.name = '.$line_of_text2[1].'
custom.handset.language = Spanish
custom.handset.time_format = 0
account.1.enable = 1
account.1.label = '.$line_of_text2[1].'
account.1.display_name = '.$line_of_text2[1].'
account.1.user_name = '.$line_of_text2[1].'
account.1.auth_name = '.$line_of_text2[1].'
account.1.password = '.$pass_sip.'
account.1.sip_server_host.legacy = '.$sip_server.'
account.1.sip_server.1.address = '.$sip_server.'
voice_mail.number.1 = *97
phone_setting.phone_lock.lock_key_type = 0
network.internet_port.type = 2
network.internet_port.ip = '.$line_of_text2[2].'
network.internet_port.mask = '.$netmask.'
network.internet_port.gateway = '.$gw.'
network.static_dns_enable = 1
network.vlan.internet_port_enable = '.$vlan_enable.'
network.vlan.internet_port_vid = '.$vlan.'
local_time.time_zone = -5
local_time.time_zone_name = None
local_time.summer_time = 0
local_time.ntp_server1 = '.$sip_server.'
local_time.ntp_server2 = '.$sip_server.'
custom.handset.language = Spanish
security.user_password = admin:'.$pwad.'

');
fclose($fp);

?>