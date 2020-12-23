!/bin/bash
echo "==================> Initialize services. <=================="
service mysql start
mariadb < /etc/nginx/sql/new_db.sql
service php7.3-fpm start
service nginx start
echo "====================> Server is ready. <===================="
bash
