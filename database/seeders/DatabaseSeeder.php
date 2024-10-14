<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'abbigliamento',
        'elettronica',
        'prodotti per animali',
        'libri, riviste e giornali',
        'articoli per la pulizia e ligiene',
        'giocattoli per bambini',
        'attrezzatura sportiva e fitness',
        'cosmetici',
        'mobili',
        'accessori per la casa e giardinaggio'
    ];
    public function run(): void
    {
        // User::factory(10)->create();

        foreach($this->categories as $category){
            Category::create([
                'name' => $category
            ]);
        }
}
}