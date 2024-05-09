FROM debian:latest

RUN apt-get update -y && apt-get install mariadb-server -y

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY init.sql /etc/mysql/init.sql
COPY script.sh .

RUN mkdir /run/mysqld && chmod +x script.sh

CMD ["./script.sh"]
