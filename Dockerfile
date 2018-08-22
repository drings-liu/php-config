FROM hub.tencentyun.com/idreamsky/ng-base:ubuntu1604-nginx-php7-V5
RUN rm /etc/nginx/conf.d/tp*.conf 
ADD ./tpl.test.com.conf /etc/nginx/conf.d
ADD . /data/www/php-config