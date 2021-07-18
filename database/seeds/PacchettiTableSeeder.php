<?php

use Illuminate\Database\Seeder;
use App\Pacchetto;

class PacchettiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arraypacchetto = config('pacchetti');

        foreach($arraypacchetto as $item){
            $pacchetto = new Pacchetto();
            $pacchetto->name = $item['name'];
            $pacchetto->destination = $item['destination'];
            $pacchetto->price = $item['price'];
            $pacchetto->save();

        }
    }
}
