<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContactsSeeder::class);
//        DB::table('users')->insert([
//            'first_name' => Str::random(10),
//            'email' => Str::random(10).'@gmail.com',
//        ]);

//        factory(App\User::class, 50)->create();
    }
}
