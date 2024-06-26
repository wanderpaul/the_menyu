<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $store_list = [
            'Dolibee',
            'McJoe',
            'Jowking',
            'CFC',
            'Greenwitch',
            'YellowCap',
            'Devils'
        ];

        foreach ($store_list as $store) {
            DB::table('store_list')->insert([
                'store_name' => $store,
            ]);
        }
    }
}
