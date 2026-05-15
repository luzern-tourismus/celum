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


