cd public

wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.zip
unzip phpMyAdmin-5.0.2-all-languages.zip
mv phpMyAdmin-5.0.2-all-languages mysql
rm phpMyAdmin-5.0.2-all-languages.zip 
cp ../.gitpod/config.inc.php ./mysql
