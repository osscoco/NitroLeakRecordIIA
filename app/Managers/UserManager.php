<?php

namespace App\Managers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserManager
{
    public function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            "email_verified_at" => Carbon::now(),
            'password' => Hash::make($data['password']),
            'role_id' => 2,
            'remember_token' => NULL,
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);
        $user->save();
        return $user;
    }
}