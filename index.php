<?php

include('config/db_config.php');
echo "连接数据库地址是：<br/>".$db_config['db_user_host'];

echo "连接数据库地址是：<br/>".$db_config['db_user_name'];

echo "连接数据库地址是：<br/>".$db_config['db_user_pswd'];
echo "restart nginx test <br/>";
echo "hello configmap <br/>";
var_dump($db_config);