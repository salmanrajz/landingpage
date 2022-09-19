<?php

namespace Database\Seeders;

use App\Models\caryaati_packages;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        //
        // for($i=0;$i=>0;$i++){
        for ($i = 0; $i < 4; $i++) {
            caryaati_packages::create([
                'name' => 'Package' . $i,
                'name' => 'Package' . $i,
            ]);
        }
    }
}
