<?php
namespace Devionity;

final class DataBase
{
    private static $link = null;

    public static function getConnection()
    {
        if (self :: $link){
            return self :: $link;
        }

        $dsn = "mysql:host=".DB_HOST."; dbname=".DB_NAME;
        self::$link = new \PDO($dsn, DB_USER, DB_PSW);
        self::$link->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return self::$link;
    }

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}