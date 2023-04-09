<?php

namespace ivan\Architecture\ORM;

use ivan\Architecture\Contracts\DBConnectionInterface;

class MySQLDBConnection extends BaseMySQLORM implements DBConnectionInterface
{

    public function connectionStatus()
    {
        echo 'Этот сервис работает с MySQL' . PHP_EOL;
    }

    public function closeConnection()
    {
        // TODO: Implement closeConnection() method.
    }
}
