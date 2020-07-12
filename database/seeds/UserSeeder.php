<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'id'    => '2-'.Str::random(8),
            'email' => 'invesnotes@mail.com',
            'password' => Hash::make('password')
        ]);
    }
}
