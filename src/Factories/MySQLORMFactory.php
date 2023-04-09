<?php


namespace ivan\Architecture\Factories;


use ivan\Architecture\Contracts\DBConnectionInterface;
use ivan\Architecture\Contracts\DBQueryBuilderInterface;
use ivan\Architecture\Contracts\DBRecordInterface;
use ivan\Architecture\Contracts\ORMFactoryInterface;
use ivan\Architecture\Db\MySQL;
use ivan\Architecture\ORM\MySQLDbConnection;
use ivan\Architecture\ORM\MySQLDbQueryBuilder;
use ivan\Architecture\ORM\MySQLDbRecord;

class MySQLORMFactory implements ORMFactoryInterface
{
    private MySQL $mySQLConnection;

    public function __construct(MySQL $mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }

    public function createDBConnection(): DBConnectionInterface
    {
        return new MySQLDBConnection($this->mySQLConnection);
    }

    public function createDBRecord(): DBRecordInterface
    {
        return new MySqlDbRecord($this->mySQLConnection);
    }

    public function createDBQueryBuilder(): DBQueryBuilderInterface
    {
        return new MySQLDbQueryBuilder($this->mySQLConnection);
    }
}
