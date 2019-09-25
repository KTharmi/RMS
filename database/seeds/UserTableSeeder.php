<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
             'username' => 'admin',
             'email' => 'admin@admin.com',
             'password' => Hash::make('123456'),
             'is_active' => 'Yes',
            ],
            [
                'username' => 'hod',
                'email' => 'hod@hod.com',
                'password' => Hash::make('456789'),
                'is_active' => 'Yes',
            ],
            [
                'username' => 'lecturer',
                'email' => 'lecturer@lecturer.com',
                'password' => Hash::make('abcdef'),
                'is_active' => 'Yes',
            ],
            [
                'username' => 'student',
                'email' => 'student@student.com',
                'password' => Hash::make('ghijkl'),
                'is_active' => 'Yes',
            ],
         ];
         foreach($users as $user){
             App\User::create($user);
         }
    }
}
