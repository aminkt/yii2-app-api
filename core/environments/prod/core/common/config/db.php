<?php
return
    [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=dbname',
        'username' => 'username',
        'password' => 'password',
        'charset' => 'utf8mb4',
        'enableSchemaCache' => true,
        // Duration of schema cache.
        'schemaCacheDuration' => 3600,
        // Name of the cache component used to store schema information
        'schemaCache' => 'cache',
        'tablePrefix' => 'tbl_',
    ];