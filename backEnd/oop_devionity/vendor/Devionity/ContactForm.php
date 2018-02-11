<?php
namespace Devionity;


class ContactForm
{
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

    public function getDbParams() : array
    {
        $params = [];
        foreach ($this as $key => $param){
            $params[$key] = $param;
        }

        return $params;
    }
}