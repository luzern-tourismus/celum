
git clone https://<TOKEN>@github.com/luzern-tourismus/dam-migration.git
sudo mysql -e "CREATE USER 'celum2'@'localhost' IDENTIFIED BY '123456';GRANT ALL PRIVILEGES ON celum.* TO 'celum2'@'localhost';FLUSH PRIVILEGES;"
sudo composer update

