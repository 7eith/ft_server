# Generate auto SSL certificate with MkCert
chmod +x mkcert
./mkcert localhost

cp configs/nginx_autoindex.conf /etc/nginx/sites-enabled/

# Starting services! 
/etc/init.d/php7.3-fpm start
service nginx start
service mysql start

# Infinite loop.. 
tail -f /dev/null
