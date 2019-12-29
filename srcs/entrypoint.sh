# Generate auto SSL certificate with MkCert
chmod +x mkcert
./mkcert localhost

cp configs/nginx.conf  /etc/nginx/sites-enabled/

# Starting and setup mysql
service mysql start
source database/init_db.sh

# Starting services! 
/etc/init.d/php7.3-fpm start
service nginx start

# Infinite loop.. 
tail -f /dev/null
