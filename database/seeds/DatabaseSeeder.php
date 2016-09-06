<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        /*
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        */


        DB::table('products')->insert([
            'name' => 'produto teste seed',
            'description' => 'produto de teste com finalidades de teste',
            'brand_id' => 5,
            'category_id' => 1,
            
        ]);

        Model::reguard();
    }
}
