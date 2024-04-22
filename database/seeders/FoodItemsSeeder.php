<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FoodItemsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $foodItems = [
            1 =>
                [
                    'Chicken',
                    'BurgerSteak',
                    'YummyBurger',
                    'Frenz Fries',
                    'Mango Picha Pie',
                    'Cooke',
                    'Sprayt',
                    'Loyar',
                    'Ice Ti'
                ],
            2 =>
                [
                    'McChicken',
                    'McBurgerSteak',
                    'McYummyBurger',
                    'McFrenz Fries',
                    'McMango Picha Pie',
                    'McCooke',
                    'McSprayt',
                    'McLoyar',
                    'McIce Ti'
                ],
            3 =>
                [
                    'ChowChicken',
                    'ChowBurgerSteak',
                    'ChowYummyBurger',
                    'ChowFrenz Fries',
                    'ChowMango Picha Pie',
                    'ChowCooke',
                    'ChowSprayt',
                    'ChowLoyar',
                    'ChowIce Ti'
                ],
            4 =>
                [
                    'CFCChicken',
                    'CFCBurgerSteak',
                    'CFCYummyBurger',
                    'CFCFrenz Fries',
                    'CFCMango Picha Pie',
                    'CFCCooke',
                    'CFCSprayt',
                    'CCFCLoyar',
                    'CFCIce Ti'
                ],
            5 =>
                [
                    'Chicken',
                    'BurgerSteak',
                    'YummyBurger',
                    'Cooke',
                    'Sprayt',
                    'Loyar',
                    'Ice Ti'
                ],
            6 =>
                [
                    'Chicken',
                    'BurgerSteak',
                    'YummyBurger',
                    'Cooke',
                    'Loyar',
                    'Ice Ti'
                ],
            7 =>
                [
                    'YummyBurger',
                    'Frenz Fries',
                    'Mango Picha Pie',
                    'Cooke',
                    'Sprayt',
                    'Ice Ti'
                ],
            8 =>
                [
                    'Frenz Fries',
                    'Mango Picha Pie',
                    'Cooke',
                    'Sprayt',
                    'Loyar',
                    'Ice Ti'
                ],
            9 =>
                [
                    'Chicken',
                    'BurgerSteak',
                    'YummyBurger',
                    'Frenz Fries',
                    'Mango Picha Pie',
                    'Cooke',
                    'Sprayt',
                    'Loyar',
                    'Ice Ti'
                ],
            10 =>
                [
                    'Chicken',
                    'BurgerSteak',
                    'YummyBurger',
                    'Frenz Fries',
                    'Mango Picha Pie',
                    'Cooke',
                    'Sprayt',
                    'Loyar',
                    'Ice Ti'
                ],
            11 =>
                [
                    'Chicken',
                    'BurgerSteak',
                    'YummyBurger',
                    'Frenz Fries',
                    'Mango Picha Pie',
                    'Cooke',
                    'Sprayt',
                    'Loyar',
                    'Ice Ti'
                ],
            12 =>
                [
                    'Chicken',
                    'BurgerSteak',
                    'YummyBurger',
                    'Frenz Fries',
                    'Mango Picha Pie',
                    'Cooke',
                    'Sprayt',
                    'Loyar',
                    'Ice Ti'
                ],
            13 =>
                [
                    'Chicken',
                    'BurgerSteak',
                    'YummyBurger',
                    'Frenz Fries',
                    'Mango Picha Pie',
                    'Cooke',
                    'Sprayt',
                    'Loyar',
                    'Ice Ti'
                ],
            14 =>
                [
                    'Chicken',
                    'BurgerSteak',
                    'YummyBurger',
                    'Frenz Fries',
                    'Mango Picha Pie',
                    'Cooke',
                    'Sprayt',
                    'Loyar',
                    'Ice Ti'
                ],
            
        ];

        foreach ($foodItems as $id => $item) {
            foreach ($item as $food) {
                DB::table('food_items')->insert([
                    'store_id' =>$id,
                    'item_name' => $food
                ]);
            }
        }
    }
}
