<?php

namespace ivan\Architecture\Contracts;

interface DBRecordInterface
{
    public function getOne();

    public function insertOne();

    public function updateOne();

    public function deleteONe();
}
