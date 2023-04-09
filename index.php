<?php

use ivan\Architecture\DB\MySQL;
use ivan\Architecture\DB\Oracle;
use ivan\Architecture\DB\PostgreSQL;
use ivan\Architecture\Factories\MySQLORMFactory;
use ivan\Architecture\Factories\OracleORMFactory;
use ivan\Architecture\Factories\PostgreORMFactory;
use ivan\Architecture\Services\ORMService;

function load($className)
{
    var_dump($className);
    $file = $className . ".php";
    $nameSpace = "Devavi\Architecture";
    $file = str_replace($nameSpace, "src", $file);
    $file = str_replace("\\", "/", $file);
    $file = str_replace("_", "/", $file);
    if (file_exists($file)) {
        var_dump($file);
        include $file;
    }
};


$postgreFactory = new PostgreORMFactory(new PostgreSQL());
$postgreORM = new ORMService($postgreFactory);
$postgreORM->connectionInfo();
$postgreORM->getAll();
$postgreORM->insert();

$oracleFactory = new OracleORMFactory(new Oracle());
$oracleORM = new ORMService($oracleFactory);
$oracleORM->connectionInfo();
$oracleORM->getAll();
$oracleORM->insert();

$mySQLFactory = new MySQLORMFactory(new MySQL());
$mySQLORM = new ORMService($mySQLFactory);
$mySQLORM->connectionInfo();
$mySQLORM->getAll();
$mySQLORM->insert();
