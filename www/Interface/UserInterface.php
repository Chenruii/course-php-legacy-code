<?php
/**
 * Created by PhpStorm.
 * User: ruich
 * Date: 10/05/2019
 * Time: 00:46
 */

namespace models;

interface UserInterface
{
    public function getEmail(): ?string;

    public function getPwd(): ?string;

    public function getRole(): ?string;

    public function getStatus(): ?string;
}