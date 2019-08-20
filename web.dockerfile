FROM nginx:1.10

MAINTAINER Moh Saifoelloh | "saifoelloh@gmail.com"

ADD vhost.conf /etc/nginx/conf.d/default.conf
