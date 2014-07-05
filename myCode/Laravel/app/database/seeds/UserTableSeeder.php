<?php


class UserTableSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();

        DB::table('users')->delete();


        User::create(array(
            'username' => 'foo',
            'password' => Hash::make('password')
        ));

    }

}