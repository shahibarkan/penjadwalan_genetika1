<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class SeederUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $new_user = [
        //     'name'     => 'admin',
        //     'email'    => 'admin@gmail.com',
        //     'password' => Hash::make('admin'),
        // ];
        $new_user = [
            'name'     => 'user',
            'email'    => 'user@gmail.com',
            'password' => Hash::make('user'),
        ];

        $user = User::create($new_user);
    }
}
