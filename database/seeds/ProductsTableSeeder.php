<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $products = [];
        $types = ['Полиэфирные', 'Эпоксидные', 'Эпоксидно-полиэфирные', 'Полиуретановые', 'Силиконовые', 'Низкотемпературные', 'Фотоотверждающиеся'];
        $effects = ['Муар', 'Шагрень', 'Металлик', 'Глянец', 'Антик', 'Молотковый', 'Кожа', 'Другие'];
        $packages = ['Мешок', 'Коробка', 'Контейнер'];
        for ($i = 0; $i < 1000; $i++) {
            $name = 'Название краски номер ' . $i;
            $factory = 'Завод производитель краски номер' . $i;
            $typeOne = $types[array_rand($types, 1)];
            $effectsOne = $effects[array_rand($effects, 1)];
            $ral = rand(1000, 10000);
            $priceP = rand(100, 1000);
            $margin = rand(10, 50);
            $priceF = $priceP + $priceP * ($margin / 100);
            $packageOne = $packages[array_rand($packages, 1)];
            $weight = rand(1, 500);
            $products[] = [
                'name' => $name,
                'factory' => $factory,
                'type' => $typeOne,
                'effects' => $effectsOne,
                'ral_color' => $ral,
                'price_purchase' => $priceP,
                'margin' => $margin,
                'price_final' => $priceF,
                'package_name'=>$packageOne,
                'weight'=>$weight
            ];


        }
        DB::table('products')->insert($products);*/
    }
}
