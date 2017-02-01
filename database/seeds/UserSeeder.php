<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::insert(['name' => 'Administrator', 'email' => 'email@example.com', 'password' => bcrypt('pass123'), 'active' => true, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]);

        $user = User::find(1);
        $admin = Role::find(1);
        $user->attachRole($admin);


    }
}
