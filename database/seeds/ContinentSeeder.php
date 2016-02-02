<?php

use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder {
    public function run () {
        $continents = $this->getContinents();
        DB::table('Continent')->insert($continents);
    }

    private function getContinents () {
        return [
            ['id' => 1, 'name' => 'Africa', 'symbol' => 'AFR'],
            ['id' => 2, 'name' => 'Antarctica', 'symbol' => 'ANT'],
            ['id' => 3, 'name' => 'Asia', 'symbol' => 'ASI'],
            ['id' => 4, 'name' => 'Europe', 'symbol' => 'EUR'],
            ['id' => 5, 'name' => 'North America', 'symbol' => 'NAM'],
            ['id' => 6, 'name' => 'Oceania', 'symbol' => 'OCE'],
            ['id' => 7, 'name' => 'South America', 'symbol' => 'SAM'],
        ];
    }

}
