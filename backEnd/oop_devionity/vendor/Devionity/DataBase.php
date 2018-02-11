<?php
namespace Devionity;

final class DataBase
{
    const hostDB = 'localhost';
    const nameDB = 'practice_db';
    const userDB = 'root';
    const pswDB = '';

    private static $link = null;

    public static function getLink()
    {
        if (self :: $link)
            return self :: $link;

        try {
            $dsn = "mysql:host=".self::hostDB."; dbname=".self::nameDB;
            self::$link = new \PDO($dsn, self::userDB, self::pswDB);
            self::$link->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\Exception $exception) {
            var_dump($exception->getMessage()); die;
        }
        return self::$link;
    }

    public static function addCallBack(\Devionity\ContactForm $callBack) : bool
    {
        $link = self::getLink();
        $query = 'INSERT INTO call_backs (`name`, `email`, `phone`, `message`) VALUES (:name, :email, :phone, :message)';
        $prepareQuery = $link->prepare($query);
        $params = $callBack->getDbParams();
        return $prepareQuery->execute($params);
    }

    public static function getCallBacks() : array
    {
        $link = self::getLink();
        $query = 'SELECT * FROM call_backs';
        $callBacksResult = $link->query($query);
        $callBacks = $callBacksResult->fetchAll(\PDO::FETCH_ASSOC);
        return $callBacks;
    }

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}