<?php

namespace Classes;

abstract class DB
{
    const DB = 'pagevamp_task';
    const PASSWORD = 'root';
    const USERNAME = 'root';
    const HOST = '172.17.0.2';

    public function __construct()
    {
        $this->db = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB);
    }
}
