<?php


namespace ivan\Architecture\Factories;


use ivan\Architecture\Contracts\DBConnectionInterface;
use ivan\Architecture\Contracts\DBQueryBuilderInterface;
use ivan\Architecture\Contracts\DBRecordInterface;
use ivan\Architecture\Contracts\ORMFactoryInterface;
use ivan\Architecture\DB\Oracle;
use ivan\Architecture\ORM\OracleDBConnection;
use ivan\Architecture\ORM\OracleDBQueryBuilder;
use ivan\Architecture\ORM\OracleDBRecord;

class OracleORMFactory implements ORMFactoryInterface
{
    private Oracle $oracleConnection;

    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    public function createDBConnection(): DBConnectionInterface
    {
        return new OracleDBConnection($this->oracleConnection);
    }

    public function createDBRecord(): DBRecordInterface
    {
        return new OracleDBRecord($this->oracleConnection);
    }

    public function createDBQueryBuilder(): DBQueryBuilderInterface
    {
        return new OracleDBQueryBuilder($this->oracleConnection);
    }
}
