<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Category 1
        $category1 = new Category();
        $category1->name = "mouses";
        $category1->description = "este es una descripcion de la categoria mouses";
        $category1->save();

        //Category 2
        $category2 = new Category();
        $category2->name = "teclados";
        $category2->description = "este es una descripcion de la categoria teclados";
        $category2->save();

        //Category 3
        $category3 = new Category();
        $category3->name = "pantallas";
        $category3->description = "este es una descripcion de la categoria pantallas";
        $category3->save();
    }
}
