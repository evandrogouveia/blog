<?php
return array(
    'db' => array(
        'driver' => 'pdo',
        'dsn' => 'mysql:host=localhost;dbname=busca',
        'username' => 'root',
        'password' => ''
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 
                                    'Zend\Db\Adapter\AdapterServiceFactory'
        )
    )
);
