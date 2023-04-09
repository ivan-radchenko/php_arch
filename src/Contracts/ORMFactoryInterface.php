<?php

namespace ivan\Architecture\Contracts;

interface ORMFactoryInterface
{
    public function createDBConnection(): DBConnectionInterface;

    public function createDBRecord(): DBRecordInterface;

    public function createDBQueryBuilder(): DBQueryBuilderInterface;
}
