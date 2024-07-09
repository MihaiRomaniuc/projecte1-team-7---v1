<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Concessionaire;

class ConcessionaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $concessionaires = [
            [                
                'name'  => 'Hydra Center BCN SUD',
                'phone_number' => 931222583,
                'email' => 'ventas@catalunyawagen.hydra.es',
                'address' => 'Pol. Ind Zona Franca, C/ A, 61, 08040, Barcelona, Barcelona',
            ],
            [                
                'name'  => 'Motorsol Import',
                'phone_number' => 931222622,
                'email' => 'ventas@motorsol.hydra.es',
                'address' => 'Ctra. Del Prat, 3, 08830, Sant Boi De Llobregat, Barcelona',
            ],
            [                
                'name'  => 'Sarsa Valles',
                'phone_number' => 931222633,
                'email' => 'Fcuenca@sarsa.com',
                'address' => 'Carrer Jiloca 8, 08223, Terrassa, Barcelona',
            ],
            [                
                'name'  => 'Servisimó',
                'phone_number' => 931222634,
                'email' => 'ventas@servisimo.hydra.es',
                'address' => 'C/ Alemanya, 17, 08700, Igualada, Barcelona',
            ],
            [                
                'name'  => 'Superwagen',
                'phone_number' => 931222635,
                'email' => 'ventas@superwagen.hydra.es',
                'address' => 'Ctra. de Rubí 62-64, 08174, Sant Cugat, Barcelona',
            ],
            [                
                'name'  => 'Vilamòbil',
                'phone_number' => 931222636,
                'email' => 'ventas@vilamobil.hydra.es',
                'address' => 'Ronda Europa, 68, 08800, Vilanova i la Geltrú, Barcelona',
            ],
            [                
                'name'  => 'Mogauto',
                'phone_number' => 931222617,
                'email' => 'ventas@mogauto.hydra.es',
                'address' => 'Paseo Guayaquil 5, 8030, Barcelona, Barcelona',
            ],
        ];

        Concessionaire::insert($concessionaires);
    }
}
