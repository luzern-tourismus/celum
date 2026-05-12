apt update
apt upgrade -y
apt install -y mariadb-server mariadb-client
apt install -y apache2
apt install -y php

apt install -y php-dom php-gd php-mysql php-curl php-zip php-mbstring php-fpm
apt install -y certbot python3-certbot-apache



a2enconf php8.4-fpm
a2enmod rewrite


systemctl restart apache2
apt install -y composer
apt install -y git



sudo apt install -y php-fpm


apt install certbot

 php8.5-mysql php8.5-xml php8.5-zip php8.5-curl php8.5-mbstring