<?php

include('config/db_config.php');
echo " 连接数据库地址是：".$db_config['db_user_host'];
echo "\n";
echo " 连接数据库地址是：".$db_config['db_user_name'];
echo "\n";
echo " 连接数据库地址是：".$db_config['db_user_pswd'];
echo "\n";
echo "hello configmap \n";
var_dump($db_config);