<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('villes')->insert([
            ['name' => 'Le Havre'],
            ['name' => 'Rouen'],
            ['name' => 'Caen'],
            ['name' => 'Évreux'],
            ['name' => 'Dieppe'],
            ['name' => 'Cherbourg-Octeville'],
            ['name' => 'Sotteville-lès-Rouen'],
            ['name' => 'Saint-Étienne-du-Rouvray'],
            ['name' => 'Alençon'],
            ['name' => 'Le Grand-Quevilly'],
            ['name' => 'Vernon'],
            ['name' => 'Le Petit-Quevilly'],
            ['name' => 'Hérouville-Saint-Clair'],
            ['name' => 'Lisieux'],
            ['name' => 'Mont-Saint-Aignan'],
            ['name' => 'Fécamp'],
            ['name' => 'Saint-Lô'],
            ['name' => 'Louviers'],
            ['name' => 'Équeurdreville-Hainneville'],
            ['name' => 'Elbeuf'],
            ['name' => 'Montivilliers'],
            ['name' => 'Seine-Maritime']
        ]);
    }
}
