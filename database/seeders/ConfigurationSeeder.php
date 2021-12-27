<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First configuracion
        Configuration::create([
            'id' => 1,
            'name' => "configured",
            'value_int' => 0
        ]);
    }
}
