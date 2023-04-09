<?php


namespace ivan\Architecture\ORM;


use ivan\Architecture\DB\MySQL;

abstract class BaseMySQLORM
{
    private MySQL $mySQLConnection;

    public function __construct(MySQL $mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }

    public function getMySQLConnection(): MySQL
    {
        return $this->mySQLConnection;
    }
}
