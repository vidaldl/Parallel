<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('username', 'admin')->first();

        if (!$user) {
          User::create([
            'username' => 'admin',
            'email' => 'vidaldl63@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password')
          ]);
        }
    }
}
