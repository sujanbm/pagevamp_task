<?php

abstract class DB {

    const DB = 'pagevamp_test';
    const PASSWORD = 'root';
    const USERNAME = 'root';
    const HOST = 'localhost';

    function __construct()
    {
        $this->db = mysqli_connect( self::HOST, self::USERNAME, self::PASSWORD, self::DB );
    }
}
