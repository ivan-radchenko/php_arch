<?php

namespace ivan\Architecture\ORM;

use ivan\Architecture\Contracts\DBQueryBuilderInterface;

class PostgreDBQueryBuilder extends BasePostgreORM implements DBQueryBuilderInterface
{

    public function getAll()
    {
        echo 'Получаю все файлы из таблицы в PostgreSQL базе данных' . PHP_EOL;
    }

    public function getAllWhere()
    {
        // TODO: Implement getAllWhere() method.
    }

    public function getAllWhereIn()
    {
        // TODO: Implement getAllWhereIn() method.
    }
}
