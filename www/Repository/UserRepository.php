<?php
/**
 * Created by PhpStorm.
 * User: ruich
 * Date: 11/05/2019
 * Time: 17:44
 */

namespace App\Repository;


use App\Entity\User;

class UserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }
}