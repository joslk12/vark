<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('events')->delete();

        $events = [
            [
                'id' => 1,
                'name' => 'Inauguración',
                'date' => '2020-11-11 00:00:00',
                'type' => 'Inauguration',
                'start' => '2020-11-11 16:00:00',
                'end' => '2020-11-11 16:15:00'
            ],
            [
                'id' => 2,
                'name' => 'Espectativas de los impactos de la crisis económica en el sector financiero',
                'date' => '2020-11-11 00:00:00',
                'type' => 'Master Lecture',
                'start' => '2020-11-11 16:20:00',
                'end' => '2020-11-11 17:00:00'
            ],
            [
                'id' => 3,
                'name' => 'Los impactos en el perfil de riesgos',
                'date' => '2020-11-11 00:00:00',
                'type' => 'Rounded Table',
                'start' => '2020-11-11 17:10:00',
                'end' => '2020-11-11 18:00:00'
            ],
            [
                'id' => 4,
                'name' => 'Espectativas de crecimiento de la cartera de crédito: Hacia un nuevo análisis y reformulación del apetito de riesgo',
                'date' => '2020-11-11 00:00:00',
                'type' => 'Rounded Table',
                'start' => '2020-11-11 18:10:00',
                'end' => '2020-11-11 19:00:00'
            ],
            [
                'id' => 5,
                'name' => '¿Cómo afrontar una potencial crisis de liquidez en el sector financiero? Mitigantes',
                'date' => '2020-11-12 00:00:00',
                'type' => 'Rounded Table',
                'start' => '2020-11-12 16:20:00',
                'end' => '2020-11-12 16:50:00'
            ],
            [
                'id' => 6,
                'name' => '¿Basilea III estaba preparada para esta crisis?',
                'date' => '2020-11-12 00:00:00',
                'type' => 'Master Lecture',
                'start' => '2020-11-12 17:00:00',
                'end' => '2020-11-12 17:50:00'
            ],
            [
                'id' => 7,
                'name' => '¿Cuáles serán los Paradigmas del sector financiero para el 2021?',
                'date' => '2020-11-12 00:00:00',
                'type' => 'Rounded Table',
                'start' => '2020-11-12 18:00:00',
                'end' => '2020-11-12 18:50:00'
            ]
        ];

        DB::table('events')->insert($events);
    }
}
