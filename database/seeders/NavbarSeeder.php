<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'name' => 'Client list',
                'route' => 'home',
                'ordering' => 1,
            ],
            [
                'name' => 'Client delivery',
                'route' => 'client-delivery',
                'ordering' => 2,
            ],
            [
                'name' => 'Report "Order types"',
                'route' => 'order-types',
                'ordering' => 3,
            ],
            [
                'name' => 'Report "Last delivery"',
                'route' => 'last-delivery',
                'ordering' => 4,
            ],
            [
                'name' => 'Report "Inactive clients"',
                'route' => 'inactive-clients',
                'ordering' => 5,
            ],

        ];

        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}
