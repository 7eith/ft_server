

# MkCert
chmod +x mkcert
./mkcert localhost

rm /etc/nginx/sites-enabled/defaut
cp configs/nginx_autoindex.conf /etc/nginx/sites-enabled/

/etc/init.d/php-fpm start

service nginx start
service mysql start
tail -f /dev/null
