<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{
    public function getUser($id)
    {
        return User::find($id);
    }
    public function getUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }
    public function insertUser($data)
    {
        User::create($data);
    }
    public function updateUser($data, $id)
    {
        $user=User::find($id);
        $user->update($data);
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        if(!empty($user)){
            $user->delete();
        }
    }
}
