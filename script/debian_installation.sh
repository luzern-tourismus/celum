apt update
apt upgrade
apt install -y mariadb-server mariadb-client
apt install -y php
apt install -y php-dom php-gd php-mysql
apt install -y apache2
apt install -y libapache2-mod-php
a2enmod php
systemctl restart apache2
apt install -y composer