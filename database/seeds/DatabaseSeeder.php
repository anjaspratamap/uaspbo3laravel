<?php

use Illuminate\Database\Seeder;
use App\sysuser;
use App\data_menu;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        sysuser::insert([
            'uname' => 'admin',
            'namalengkap' => 'administrator',
            'email' => 'admin@pbo3.com',
            'upass' => sha1('admin')
        ]);
    }
}
