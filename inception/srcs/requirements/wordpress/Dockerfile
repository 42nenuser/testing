From debian:latest


RUN apt update -y 

RUN apt install php-fpm php-mysqli -y

RUN apt install curl -y

COPY www.conf /etc/php/8.2/fpm/pool.d/.
COPY script.sh .
RUN chmod +x script.sh

CMD ["./script.sh"]
