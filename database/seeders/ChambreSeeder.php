<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chambre;

class ChambreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $letter = array('A','B','C');
        for ($t = 0; $t <= 29; $t++) {
            $i = rand(0,2);
            $chambre= Chambre::create([
                'nbCouchage' =>rand (0,5),
                'porte' =>$letter[$i],
                'etage' =>rand (0,3),
                'idCategorie' =>rand (1,4),
                'baignoire' =>rand (1,2),
                'prixBase' =>rand (20,150)
            ]);
        }
        //affichage en console
        dd($chambre);
    }
}
