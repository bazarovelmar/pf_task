FROM mariadb/server

RUN ln -sf /usr/share/zoneinfo/Europe/Moscow /etc/localtime

VOLUME ["/docker-entrypoint-initdb.d"]

CMD ["--character-set-server=utf8mb4", "--character-set-client-handshake=0", "--collation-server=utf8mb4_general_ci"]
