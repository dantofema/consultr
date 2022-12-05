<?php

namespace App\Imports;

use App\Models\Superhero;
use Maatwebsite\Excel\Concerns\ToModel;

class SuperheroImport implements ToModel
{

    public function model (array $row): Superhero
    {
        return new Superhero([
            'name' => $row['1'],
            'full_name' => $row['2'],
            'strength' => $row['3'],
            'speed' => $row['4'],
            'durability' => $row['5'],
            'power' => $row['6'],
            'combat' => $row['7'],
            'race' => $row['8'],
            'height_0' => $row['9'],
            'height_1' => $row['10'],
            'weight_0' => $row['11'],
            'weight_1' => $row['12'],
            'eye_color' => $row['13'],
            'hair_color' => $row['14'],
            'publisher' => $row['15'],
        ]);
    }
}
