<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Offer::query()->create([
            'code' => strtoupper(Str::random(4)),
            'title' => strtoupper(Str::random(8)),
            'description' => strtoupper(Str::random(10)),
            'category_id' => 1,
            'author_id' => 2,
            'min_product_count' => 1,
            'free_product_for_min_product_count' => 1,
        ]);

        Offer::query()->create([
            'code' => strtoupper(Str::random(4)),
            'title' => strtoupper(Str::random(8)),
            'description' => strtoupper(Str::random(10)),
            'is_native' => 'native',
            'discount_percentage' => 5
        ]);

        Offer::query()->create([
            'code' => strtoupper(Str::random(4)),
            'title' => strtoupper(Str::random(8)),
            'description' => strtoupper(Str::random(10)),
            'min_order_amount' => 200,
            'discount_percentage' => 5
        ]);
    }
}
