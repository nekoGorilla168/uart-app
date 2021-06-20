FROM nginx:1.20-alpine
COPY ./conf.d/default.conf /etc/nginx/conf.d/default.conf
COPY ../../src /var/www/html
EXPOSE 80