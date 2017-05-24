<?php

use Illuminate\Database\Seeder;

class BaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\BaseType::class, 4)->create();
    }
}
