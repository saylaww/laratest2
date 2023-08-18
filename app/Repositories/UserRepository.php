<?php


namespace App\Repositories;


use App\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function getAllUser()
    {
        return "GET ALL USERS";
    }

    public function getOneUser()
    {
        // TODO: Implement getOneUser() method.
    }
}
