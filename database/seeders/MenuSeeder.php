<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_menu')->insert([
            [
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Products',
                'icon' => 'icon-box',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2024-04-14 02:38:34',
                'updated_at' => '2024-04-14 02:44:05',
            ],
            [
                'parent_id' => 8,
                'order' => 4,
                'title' => 'Categories',
                'icon' => 'icon-list',
                'uri' => 'product-categories',
                'permission' => NULL,
                'created_at' => '2024-04-14 02:43:26',
                'updated_at' => '2024-04-14 02:45:56',
            ],
            [
                'parent_id' => 8,
                'order' => 3,
                'title' => 'Products',
                'icon' => 'icon-inbox',
                'uri' => 'products',
                'permission' => NULL,
                'created_at' => '2024-04-14 02:45:52',
                'updated_at' => '2024-04-14 02:45:56',
            ],
        ]);
    }
}
