<?php


namespace ivan\Architecture\Factories;


use ivan\Architecture\Contracts\DBConnectionInterface;
use ivan\Architecture\Contracts\DBQueryBuilderInterface;
use ivan\Architecture\Contracts\DBRecordInterface;
use ivan\Architecture\Contracts\ORMFactoryInterface;
use ivan\Architecture\DB\PostgreSQL;
use ivan\Architecture\ORM\PostgreDBConnection;
use ivan\Architecture\ORM\PostgreDBQueryBuilder;
use ivan\Architecture\ORM\PostgreDBRecord;

class PostgreORMFactory implements ORMFactoryInterface
{
    private PostgreSQL $postgreConnection;

    public function __construct(PostgreSQL $postgreConnection)
    {
        $this->postgreConnection = $postgreConnection;
    }

    public function createDBConnection(): DBConnectionInterface
    {
        return new PostgreDBConnection($this->postgreConnection);
    }

    public function createDBRecord(): DBRecordInterface
    {
        return new PostgreDBRecord($this->postgreConnection);
    }

    public function createDBQueryBuilder(): DBQueryBuilderInterface
    {
        return new PostgreDBQueryBuilder($this->postgreConnection);
    }
}
