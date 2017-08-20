<?php

return array(
    'db' => array(
        'driver'         => 'Pdo',
        'dsn'            => 'mysql:dbname=klos;host=localhost',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    ),
    'mail' => array(
    'transport' => array(
        'name'              => 'DaVinci',
            'host'              => 'davinci-team.pl',
            'connection_class'  => 'login',
            'connection_config' => array(
                'username' => 'www@davinci-team.pl',
                'password' => 'AoT7kIhf',
            ),
    ),
    ),
    'adapterDb' => array(
          'driver'      =>   'Mysqli',
          'database'    =>   'klos',
          'username'    =>   'root',
          'password'    =>   'kopsow82',
          'hostname'    =>   'localhost',
          'charset'     =>   'utf8'
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter'
                    => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
    
);