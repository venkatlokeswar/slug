<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
        'email'    => 'admin',
        'password' => Hash::make('admin')

    ));
      $this->call('DatabaseSeeder');
    }
}
