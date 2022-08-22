<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreaterOrders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'client_name' => Str::random(10),
            'product_name' => Str::random(10),
            'date' => '1900-01-01',
            'size' => Str::random(10),
            'unique_id' => Str::random(10),
            'purity' => Str::random(10),
            'metal_color' => Str::random(10),
            'gross_weight' => Str::random(10),
            'gr_approx' => Str::random(10),
            'status' => true,
            'comments' => Str::random(10),
        ]);
    }
}
