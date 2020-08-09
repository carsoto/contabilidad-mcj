<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'=> 'Michael Coello',
                'username'=> 'superadmin',
                'email'=> 'gerencia@mcjline.com',
                'password'=> bcrypt('secret'),
            ]
        ];

        foreach ($data as $i) {
            \App\User::firstOrCreate($i);
        }
    }
}
