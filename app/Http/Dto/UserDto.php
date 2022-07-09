<?php

class UserDto
{

    public $id;
    public $name;
    public $categoryId;
    public $secretkey;

    public function __construct($id, $name, $categoryId, $secretkey)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
        $this->secretkey = $secretkey;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function getSecretkey()
    {
        return $this->getSecretkey();
    }
}
