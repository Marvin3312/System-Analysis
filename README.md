Preparacion de Vhost

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/System-Analysis"
    ServerName Theparfum.com
    <Directory "C:/xampp/htdocs/System-Analysis">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>


host driver

127.0.0.1 Theparfum.com