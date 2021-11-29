<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   $user = new User();
        $user->name = env('DEFAULT_USER_NAME', 'user');
        $user->email = env('DEFAULT_USER_EMAIL', 'user@user.user');
        $user->password = bcrypt(env('DEFAULT_USER_PASSWORD', 'password'));
        $user->save();
        $this->call(PostSeeder::class);
    }
}
