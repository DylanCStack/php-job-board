<?php

class Post {

    private $title;
    private $description;
    private $contact;

    function __construct($post_title, $post_description, $post_contact)
    {
        $this->title = $post_title;
        $this->description = $post_description;
        $this->contact = $post_contact;

    }

    function getTitle()
    {
        return $this->title;
    }
    function getDescription()
    {
        return $this->description;
    }
    function getContact()
    {
        return $this->contact;
    }
}






 ?>
