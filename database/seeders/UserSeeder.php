<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Enums\RoleEnum;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $userAdministrator = User::firstOrCreate([
            'email' => 'admin@gmail.com'
        ],[
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role'=> 'Administrator',
            'password' => bcrypt('123456789'),
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $userAdministrator->assignRole(RoleEnum::ADMINISTRATOR);

        $user = User::firstOrCreate([
            'email' => 'teacher@gmail.com'
        ],[
            'name' => 'Teacher',            
            'email' => 'teacher@gmail.com',
            'role'=>'Teacher',
            'password' => bcrypt('123456789'),
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $user->assignRole(RoleEnum::TEACHER);

        $user = User::firstOrCreate([
            'email' => 'student@gmail.com'
        ],[
            'name' => 'Student',            
            'email' => 'student@gmail.com',
            'role' => 'Student',
            'password' => bcrypt('123456789'),
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $user->assignRole(RoleEnum::STUDENT);
    }
}