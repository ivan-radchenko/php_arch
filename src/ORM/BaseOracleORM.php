<?php

namespace ivan\Architecture\ORM;

use ivan\Architecture\DB\Oracle;

abstract class BaseOracleORM
{
    private Oracle $oracleConnection;

    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    public function getOracleConnection(): Oracle
    {
        return $this->oracleConnection;
    }
}
