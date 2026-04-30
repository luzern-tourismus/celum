# Celum SDK

### Installation
```
composer config repositories.celum vcs https://github.com/luzern-tourismus/celum
composer require luzerntourismus/celum
```



## Linux Installation (mit sudo)
```
sudo curl -s https://raw.githubusercontent.com/luzern-tourismus/celum/refs/heads/main/script/ubuntu_installation.sh | sh
```

## Linux Installation (ohne sudo)
```
sudo curl -s https://raw.githubusercontent.com/luzern-tourismus/celum/refs/heads/main/script/debian_installation.sh | sh
```



## Deployment
```
sudo git clone https://github.com/luzern-tourismus/celum.git .
```

## Linux

sudoedit /etc/php/8.3/apache2/php.ini




## CELUM Api


https://content.luzern.com/content-api/v1/swagger-ui/



### Config
```
celum_user=
celum_password=
```


### Import Asset
```
sudo nohup php /var/www/bin/cmd.php celum-asset-import &
```

```
ps aux
```

```
du -sh /var/www/celum_asset
```



