<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
             'role_name' => 'admin',
            ],
            [
                'role_name' => 'hod',
            ],
            [
                'role_name' => 'lecturer',
            ],
            [
                'role_name' => 'student',
            ],
         ];
         foreach($roles as $role){
             App\Role::create($role);
         }
    }
}
