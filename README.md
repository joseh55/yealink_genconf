# Yealink GenConf

Yealink GenConf its a web tool for generate MAC oriented config files for autoprovision of Yealink IP phones

Demo and Visual documentation:

https://yealink.marcano.net.ve

REQUERIMENTS:

Web Server (tested in Apache)
php (tested in 5.5.9)
web browser

INSTRUCTIONS:

Put files in accesible folder via web server
grant write and read and read permissions
point in a web browser

DETAILS:

The last year (2017), I wrote this small web application to ease the process of configure large quantity of Yealink IP phones.

Before... my co-workers unpack and connect every phone, wait many seconds for booting and later configure manually network parameters, after of wait a second reboot other person should enter in each phone (web interface), and configure the rest of parameters, a really SLOW procedure and too many chances of making mistakes, and if you have 100 or more desktop phones waiting for installation.. the time of configuration extends considerably.

Yealink phones have multiples automatic ways to configure, personally select the way of MAC oriented config file. This is a unique file for every phone that contain ALL the parameters and configuration (network parameters, sip accounts, button mappings, timezone, etc).

If you have all the configuration files for your phones.. you can save a huge amount of time placing all this files in a http server and configure your DHCP server with option 66, this option say to every phone that take a DHCP address where to find your own configuration file. Every phone search this location for a file with your unique mac adress name (example 4a27d0fbb9b2.cfg) copy this file and later reboot automatically, later the phone is ready and configured with all the parameters and custom config provided.

The process of collecting data is very simple. In a CSV file put data in the following column order: MAC address, extension, Fixed IP address

Collecting MAC address of every phone can be done quickly reading directly to CSV file with a cheap usb barcode scanner and original box.

later upload this file to web application and fill the rest fields. After pressed "Generate" button a second screen display details of generated files, review and link for download all the files in a zip file.



 
