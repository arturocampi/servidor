# MVC con PHP

- Repositorio para desarrollar las clases del tema 4
- MVC
-

##  Instalación:

- Crear el fichero /etc/apache2/sites-available/mvc18.conf

```
<VirtualHost *:80>
    ServerName mvc18.local

    ServerAdmin webmaster@localhost
    DocumentRoot /home/alumno/dwes/


    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined

    <Directory /home/alumno/dwes>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    </Directory>

</VirtualHost>

```

- Activar el servicio y reiniciar apache:

```
$ sudo a2ensite mvc18
$ sudo service apache2 restart
```

- Editar el fichero /etc/hosts. Añade la línea:

```
127.0.0.1   mvc18.local
```
