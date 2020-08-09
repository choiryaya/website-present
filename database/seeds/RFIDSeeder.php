<?php

use Illuminate\Database\Seeder;

class RFIDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RFID::class, 30)->create();
    }
}
