sudo apt update
sudo apt upgrade
sudo apt install -y php php
sudo apt install -y php mariadb-server mariadb-client
sudo apt install -y apache2
sudo apt install -y libapache2-mod-php
sudo a2enmod php
sudo systemctl restart apache2

sudo apt install -y composer