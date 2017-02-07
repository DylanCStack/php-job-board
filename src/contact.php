<?php

class Contact {

    private $name;
    private $email;
    private $phone_number;

    function __construct($contact_name, $contact_email, $contact_phone_number)
    {
        $this->name = $contact_name;
        $this->email = $contact_email;
        $this->phone_number = $contact_phone_number;

    }
    
    function getName()
    {
        return $this->name;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getPhoneNumber()
    {
        return $this->phone_number;
    }
}






 ?>
