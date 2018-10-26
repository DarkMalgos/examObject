<?php

namespace Exam;

use Exam\Model;

class User extends Model
{
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $password;
    protected $date;

    public function __construct($created_at, $updated_at)
    {
        $this->date = new Model($created_at, $updated_at);
    }

    public function getFullname() {
        return $this->first_name.' '.$this->last_name;
    }
    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        $this->date->setUpdatedAt();
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        $this->date->setUpdatedAt();
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->date->setUpdatedAt();
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
        $this->date->setUpdatedAt();
    }

}
