<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'id' => '1',
                'imageUrl' => 'storage/images/bg-1.jpg'
                
            ],
            [
                'id' => '2',
                'imageUrl' => 'storage/images/bg-3.jpg'

            ],
        ];

        foreach ($items as $item) {
            Banner::firstOrCreate($item);
        }
    }
}
