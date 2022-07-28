#! /bin/bash

apt update
apt upgrade -y
apt install apache2 -y
ufw allow "Apache"
apt install mysql-server -y
apt install php libapache2-mod-php php-mysql -y
systemctl restart apache2