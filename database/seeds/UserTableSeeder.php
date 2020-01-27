<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret')
        ]);
    }
}
