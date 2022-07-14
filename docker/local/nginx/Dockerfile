FROM nginx:alpine

WORKDIR /var/www/app

COPY ./docker/local/nginx/nginx.conf              /etc/nginx/nginx.conf
COPY ./docker/local/nginx/default.conf            /etc/nginx/conf.d/default.conf
COPY ./public                                     ./public

CMD ["nginx", "-g", "daemon off;"]
