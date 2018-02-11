<?php
namespace Devionity;


class ContactForm
{
    const NEEDED_PARAMS = ['phone', 'message'];

    private $name;
    private $email;
    private $phone;
    private $message;

    public function __construct(array $params)
    {
        foreach ($params as $key => $param){
            if (property_exists(ContactForm::class, $key)){
                $this->$key = $param;
            }
        }
    }

    public function validate() : bool
    {
        $isValid = true;

        foreach (self::NEEDED_PARAMS as $param){
            if (isset($this->$param) && empty($this->$param)){
                $isValid = false;
            }
        }
        return $isValid;
    }

    public function getDbParams() : array
    {
        $params = [];
        foreach ($this as $key => $param){
            $params[$key] = $param;
        }

        return $params;
    }

    public function addToDB() : bool
    {
        $link = DataBase::getConnection();
        $query = 'INSERT INTO call_backs (`name`, `email`, `phone`, `message`) VALUES (:name, :email, :phone, :message)';
        $prepareQuery = $link->prepare($query);
        $params = $this->getDbParams();
        return $prepareQuery->execute($params);
    }

    public static function getCallBacks() : array
    {
        $link = DataBase::getConnection();
        $query = 'SELECT * FROM call_backs';
        $callBacksResult = $link->query($query);
        $callBacks = $callBacksResult->fetchAll(\PDO::FETCH_ASSOC);
        return $callBacks;
    }
}