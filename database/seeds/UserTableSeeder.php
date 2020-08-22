<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          => 'Ng Yi Xiong',
            'email'         => 'yixiongng@gmail.com',
            'password'      => Hash::make('123qwe'),
            'remember_token'=> Str::random(10),
         ]);
    }
}
