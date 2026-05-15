# Web Server Installation

### SSH Key
```
ssh-keygen
```

### SSL

```
certbot --apache
```




### Apache
```
cd /var/www;rm -rf html
```

```
vi /etc/apache2/apache2.conf
```

<VirtualHost *:80>
...
<Directory "directory/of/your/.htaccess">
AllowOverride All
</Directory>
</VirtualHost>



```
cd /var/www
git clone https://<TOKEN>@github.com/luzern-tourismus/dam-migration.git .
mysql -e "CREATE USER '<>'@'localhost' IDENTIFIED BY '123456';GRANT ALL PRIVILEGES ON celum.* TO 'celum2'@'localhost';FLUSH PRIVILEGES;"
composer update
```


-------------


git clone https://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@github.com/luzern-tourismus/dam-migration.git .
sudo mysql -e "CREATE USER 'dammigration'@'localhost' IDENTIFIED BY '123456';GRANT ALL PRIVILEGES ON dammigration.* TO 'dammigration'@'localhost';FLUSH PRIVILEGES;"

