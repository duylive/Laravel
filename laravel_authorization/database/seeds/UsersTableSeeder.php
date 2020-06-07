<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tao moi admin
        $user = new User();
        $user->name = "adminUser";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("admin");
        $user->admin = 1;
        $user->save();

        //tao user
        $user = new User();
        $user->name = "User";
        $user->email = "user@gmail.com";
        $user->password = bcrypt("user");
        $user->admin = 0;
        $user->save();
    }
}
