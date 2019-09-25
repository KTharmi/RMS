<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            RoleTableSeeder::class,
            DepartmentTableSeeder::class,
            LecturerTableSeeder::class,
            SubjectTableSeeder::class,
            StudentTableSeeder::class,
            GradeTableSeeder::class,
            IcaTypeTableSeeder::class,
            EceTypeTableSeeder::class,
        ]);
    }
}
