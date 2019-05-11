<?php
/**
 * Created by PhpStorm.
 * User: ruich
 * Date: 09/05/2019
 * Time: 23:43
 */

namespace App\Entity;

use models\UserInterface;

class User implements UserInterface
{
    private $id;
    private $identify;
    private $email;
    private $pwd;
    private $role = 1;
    private $status = 0;

    /**
     * User constructor.
     * @param $id
     * @param $identify
     * @param $email
     * @param $pwd
     * @param int $role
     * @param int $status
     */
    public function __construct($id, $identify, $email, $pwd, $role, $status)
    {
        $this->id = $id;
        $this->identify = $identify;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->role = $role;
        $this->status = $status;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdentify()
    {
        return $this->identify;
    }

    /**
     * @param mixed $identify
     */
    public function setIdentify($identify)
    {
        $this->identify = $identify;
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
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    /**
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param int $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}