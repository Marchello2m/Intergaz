<?php

namespace Database\Seeders;

use App\Models\Navbar;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $links = [

            [
                'name' => 'Atskaite "Pasūtījumu tipi"',
                'route' => 'order-types',
                'ordering' => 2,
            ],
            [
                'name' => 'Atskaite "Pēdējas piegādes"',
                'route' => 'last-delivery',
                'ordering' => 3,
            ],
            [
                'name' => 'Atskaite "Neaktīvie klienti"',
                'route' => 'inactive-clients',
                'ordering' => 4,
            ],

        ];
        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}
