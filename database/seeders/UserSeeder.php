<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make("admin1111");
        $user->level = "admin";
        $user->save();

        $user1 = new User();
        $user1->name = "user";
        $user1->email = "user@gmail.com";
        $user1->password = Hash::make("user1111");
        $user1->level = "user";
        $user1->save();
    }
}
