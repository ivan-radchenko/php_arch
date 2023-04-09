<?php

namespace ivan\Architecture\Contracts;

interface DBConnectionInterface
{
    public function connectionStatus();

    public function closeConnection();
}
