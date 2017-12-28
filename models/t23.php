<?php

$fp = fopen('cfg/'.strtolower($line_of_text2[0]).'.cfg', 'w');
fwrite($fp, 

'#!version:1.0.0.1
account.1.enable = 1
account.1.label = '.$line_of_text2[1].'
account.1.display_name = '.$line_of_text2[1].'
account.1.user_name = '.$line_of_text2[1].'
account.1.auth_name = '.$line_of_text2[1].'
account.1.password = '.$pass_sip.'
voice_mail.number.1 = *97
account.1.sip_server.1.address = '.$sip_server.'
lang.gui = Spanish
voice.group_listening.spk_vol = 5
phone_setting.redial_number = *97
phone_setting.redial_server = '.$sip_server.'
phone_setting.call_return_user_name = IP Phone
phone_setting.call_return_server = 127.0.0.1
network.internet_port.type = 2
network.internet_port.ip = '.$line_of_text2[2].'
network.internet_port.mask = '.$netmask.'
network.internet_port.gateway = '.$gw.'
network.vlan.internet_port_enable = '.$vlan_enable.'
network.vlan.internet_port_vid = '.$vlan.'
network.static_dns_enable = 1
local_time.time_zone = -5
local_time.time_zone_name = Bahamas(Nassau)
local_time.summer_time = 0
local_time.ntp_server1 = '.$sip_server.'
local_time.ntp_server2 = %NULL%
local_time.dhcp_time = 1
local_time.time_format = 0
linekey.2.type = 15
linekey.2.line = 1
linekey.2.value = %NULL%
linekey.2.label = %NULL%
linekey.2.extension = %NULL%
linekey.2.xml_phonebook = %NULL%
linekey.2.pickup_value = %NULL%
linekey.3.type = 15
linekey.3.line = 1
linekey.3.value = %NULL%
linekey.3.label = %NULL%
linekey.3.extension = %NULL%
linekey.3.xml_phonebook = %NULL%
linekey.3.pickup_value = %NULL%
programablekey.1.type = 28
programablekey.1.line = %NULL%
programablekey.1.value = %NULL%
programablekey.1.label = Histo.
programablekey.1.extension = %NULL%
programablekey.1.xml_phonebook = %NULL%
programablekey.1.pickup_value = %NULL%
programablekey.2.type = 61
programablekey.2.line = %NULL%
programablekey.2.value = %NULL%
programablekey.2.label = Direct.
programablekey.2.extension = %NULL%
programablekey.2.xml_phonebook = %NULL%
programablekey.2.pickup_value = %NULL%
programablekey.3.type = 23
programablekey.3.line = 1
programablekey.3.value = *8
programablekey.3.label = Captur
programablekey.3.extension = %NULL%
programablekey.3.xml_phonebook = %NULL%
programablekey.3.pickup_value = %NULL%
programablekey.14.type = 0
programablekey.14.line = 0
programablekey.14.value = %NULL%
programablekey.14.label = %NULL%
programablekey.14.extension = %NULL%
programablekey.14.xml_phonebook = %NULL%
programablekey.14.pickup_value = %NULL%
security.user_password = admin:'.$pwad.'
');
fclose($fp);

chmod('cfg/'.strtolower($line_of_text2[0]).'.cfg', 0775);

?>