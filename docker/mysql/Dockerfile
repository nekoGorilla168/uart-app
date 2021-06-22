FROM mysql/mysql-server:8.0

ENV MYSQL_DATABASE=local_db \
    MYSQL_USER=myuser \
    MYSQL_PASSWORD=password \
    MYSQL_ROOT_PASSWORD=password \
    TZ=Asia/Tokyo

COPY ./docker/mysql/my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf