<?php

$fp = fopen('cfg/'.strtolower($line_of_text[0]).'.cfg', 'w');
fwrite($fp, 

'#!version:1.0.0.1
account.17.codec.1.priority = 1
account.17.codec.2.priority = 2
account.17.codec.5.priority = 3
account.17.codec.6.priority = 4
account.17.codec.7.rtpmap = 102
account.17.codec.10.rtpmap = 2
account.1.codec.1.priority = 1
account.1.codec.2.priority = 2
account.1.codec.5.priority = 3
account.1.codec.6.priority = 4
account.1.codec.7.rtpmap = 102
account.1.codec.10.rtpmap = 2
account.1.enable = 1
account.1.label = '.$line_of_text[1].'
account.1.display_name = '.$line_of_text[1].' 
account.1.user_name = '.$line_of_text[1].'
account.1.auth_name = '.$line_of_text[1].'
account.1.password = '.$pass_sip.'
account.1.number_of_linekey = -1
account.1.subscribe_mwi_expires = 60
account.1.subscribe_mwi = 1
account.1.sip_server.1.address = '.$sip_server.'
account.1.ringtone.ring_type = commom
account.1.dtmf.info_type = 0
account.2.codec.1.priority = 1
account.2.codec.2.priority = 2
account.2.codec.5.priority = 3
account.2.codec.6.priority = 4
account.2.codec.7.rtpmap = 102
account.2.codec.10.rtpmap = 2
account.2.number_of_linekey = -1
account.2.ringtone.ring_type = commom
account.2.dtmf.info_type = 0
features.power_led_on = 0
voice_mail.number.1 = *97
linekey.2.type = 15
linekey.2.line = 1
linekey.2.value = %NULL%
linekey.2.pickup_value = %NULL%
linekey.2.xml_phonebook = %NULL%
programablekey.14.type = 0
programablekey.14.line = 1
programablekey.14.value = %NULL%
programablekey.14.xml_phonebook = %NULL%
programablekey.14.history_type = 0
voice.jib.min = 0
voice.jib.max = 300
network.internet_port.type = 2
network.internet_port.ip = '.$line_of_text[2].'
network.internet_port.mask = '.$netmask.'
network.internet_port.gateway = '.$gw.'
network.lldp.enable = 0
network.lldp.packet_interval = 120
network.vlan.internet_port_enable = '.$vlan_enable.'
network.vlan.internet_port_vid = '.$vlan.'
network.vlan.pc_port_vid = 0
auto_provision.update_file_mode = 0
auto_provision.server_url_read_only = 0
local_time.time_zone = -5
local_time.time_zone_name = United States-Eastern Time
local_time.ntp_server1 = '.$sip_server.'
local_time.summer_time = 0
local_time.time_format = 0
lang.gui = Spanish
hotdesking.startup_register_name_enable = 1
hotdesking.startup_sip_server_enable = 1
hotdesking.startup_outbound_enable = 1
');
fclose($fp);

//auto_provision.server.url = http://192.168.21.177/cfg/

?>