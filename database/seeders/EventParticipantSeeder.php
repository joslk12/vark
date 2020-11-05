<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_participants')->delete();

        $participants = [
            [
                'id' => 1,
                'fullname' => 'MEN Gustavo Adolfo Valera Colmenares',
                'institution' => 'Vark Consulting',
                'position' => 'Socio Fundador',
                'isPresenter' => true,
                'event_id' => 1
            ],
            [
                'id' => 2,
                'fullname' => 'Carlos de Jesús Viveros Medina',
                'institution' => 'Vark Consulting',
                'position' => 'Socio Fundador',
                'isPresenter' => true,
                'event_id' => 3
            ],
            [
                'id' => 3,
                'fullname' => 'Lic. Juan Carlos Pérez Macías',
                'institution' => null,
                'position' => null,
                'isPresenter' => true,
                'event_id' => 4
            ],
            [
                'id' => 4,
                'fullname' => 'Lic. Rebeca Esther Pizano Navarro',
                'institution' => 'Bancomext',
                'position' => 'DGA de Financiamiento',
                'isPresenter' => false,
                'event_id' => 4
            ],
            [
                'id' => 5,
                'fullname' => 'Ing. Alejandra Martínez',
                'institution' => 'Analize',
                'position' => 'Directora General',
                'isPresenter' => false,
                'event_id' => 4
            ],
            [
                'id' => 6,
                'fullname' => 'Antonio Alfaro Montaño',
                'institution' => 'AFI',
                'position' => 'Director Académico',
                'isPresenter' => true,
                'event_id' => 5
            ],
            [
                'id' => 7,
                'fullname' => 'Martín Rodriguez Aguilar',
                'institution' => 'VW Bank',
                'position' => 'Director de Riesgos',
                'isPresenter' => false,
                'event_id' => 5
            ],
            [
                'id' => 8,
                'fullname' => 'Esteban',
                'institution' => 'AFI',
                'position' => null,
                'isPresenter' => false,
                'event_id' => 5
            ],
            [
                'id' => 9,
                'fullname' => 'Mtro. Gustavo Varela Colmenares',
                'institution' => 'Vark Consulting SC',
                'position' => 'Socio Fundador - Director General',
                'isPresenter' => true,
                'event_id' => 7
            ],
            [
                'id' => 10,
                'fullname' => 'Isaac Camacho',
                'institution' => 'Universidad',
                'position' => 'Profesor',
                'isPresenter' => false,
                'event_id' => 7
            ]
        ];

        DB::table('event_participants')->insert($participants);
    }
}
