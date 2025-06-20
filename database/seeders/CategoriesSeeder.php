<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        

        Category::create([
            'name'      => 'Elektronik',
            'slug'     => 'elektronik',
        ]);

        Category::create([
            'name'      => 'Perabotan Rumah',
            'slug'     => 'perabotan-rumah',
        ]);
    }
}
