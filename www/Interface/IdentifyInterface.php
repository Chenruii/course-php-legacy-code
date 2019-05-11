<?php
/**
 * Created by PhpStorm.
 * User: ruich
 * Date: 10/05/2019
 * Time: 01:06
 */

class IdentifyInterface
{
    private $firstname;
    private $lastname;

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }




}