FROM debian:latest

#install all the program
RUN		apt-get update
RUN		apt-get install -y nginx 

COPY default /etc/nginx/sites-available/.
CMD ["nginx", "-g", "daemon off;"]
