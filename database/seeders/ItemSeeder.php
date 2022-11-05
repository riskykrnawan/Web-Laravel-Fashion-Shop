<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
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
                'name' => 'DYN Basic Mella Dress || Dress Muslim Wanita - Khaki',
                'description' => 'Mella dress, Bahan: rayon valencia',
                'rating' => 4.8,
                'stock' => 250,
                'price' => 175000,
                'sold' => 489,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/29/9572200f-5dae-4755-b2c3-e5f2a099eafc.jpg'
            ],
            [
                'id' => '2',
                'name' => 'ARSHMAYA Abaya Series Code E',
                'description' => 'Abaya nuansa ethnic dengan sentuhan warna antique',
                'rating' => 4.3,
                'stock' => 250,
                'price' => 300000,
                'sold' => 250,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/30/d747c9b7-3726-485c-b19e-a3a6eebb24b6.jpg'
            ],
            [
                'id' => '3',
                'name' => 'NOIR SUR BLANC CARDIGAN 3/4 SLEEVE BROWNMEL - Cokelat',
                'description' => 'Outerwear dari Noir Sur Blanc yang comfy dapat menjadi pelengkap tampilan yang stylish. Ladies Cardigan 3/4 Sleeve terbuat dari material knit yang lembut dengan tren warna bold tone. Koleksi tepat untuk gaya simpel yang fashionable.',
                'rating' => 4.9,
                'stock' => 250,
                'price' => 299000,
                'sold' => 1420,
                'photo' => 'https://images.tokopedia.net/img/cache/900/product-1/2019/4/28/38861771/38861771_8d25e710-ac66-4b44-a404-5eafd3ca4606_1850_1850'
            ],
            [
                'id' => '4',
                'name' => 'This Is April - Kemeja Wanita Elayna Top Grey',
                'description' => 'This Is April - Kemeja Wanita Elayna Top Grey - 179347Kemeja wanita motif garis garis dengan detail kerah reguler dan bagian depan full kancing, bisa di mix and match dengan celana denim dan sepatu sneakers.',
                'rating' => 4.9,
                'stock' => 250,
                'price' => 199000,
                'sold' => 65,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/4/1/b68781c3-9a6a-4bd8-ab25-3907eac33112.jpg'
            ],
            [
                'id' => '5',
                'name' => 'Sweater Korean Style Long Sleeve Fashion Dress TEAM STYLE',
                'description' => 'merupakan salah satu lini pakaian terbaik dan berkualitas tinggi dengan kualitas terbaik dan harga terjangkau . Dibuat dengan bahan cotton yang nyaman untuk menemani harimu.',
                'rating' => 4.4,
                'stock' => 250,
                'price' => 119000,
                'sold' => 8,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/16/d3e5b541-494b-4572-bbe6-a7cb6d32441c.jpg'
            ],
            [
                'id' => '6',
                'name' => 'DASTER IBU MENYUSUI TRENDY KEKINIAN MOTIF UNTIR - Merah',
                'description' => 'Katun Rayon Nyaman, adem, menyerap keringat menjadikannya tidak gerah saat kamu kenakan, dan mudah di setrika. Teksturnya lembut dan ringan sehingga nyaman kamu pakai sehari-hari.',
                'rating' => 4.5,
                'stock' => 250,
                'price' => 60000,
                'sold' => 54,
                'photo' => 'https://images.tokopedia.net/img/cache/900/hDjmkQ/2022/8/14/01a236ee-6518-42d5-b748-5fdbe36b8afe.jpg'
            ],
            [
                'id' => '7',
                'name' => 'Jacket Wanita | Yungmii Jaket | Blazer Wanita Kantoran - army',
                'description' => '🌸 Bahan : American Drill Premium \n 🌸 Lingkar Dada : 100-105 cm \n 🌸 Panjang : 60-70 cm \n 🌸 All Size Fit To L',
                'rating' => 4.6,
                'stock' => 250,
                'price' => 130000,
                'sold' => 20,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/2/6/61b0a3a9-518a-4de8-b7ca-8d87df95ba86.jpg'
            ],
            [
                'id' => '8',
                'name' => 'Chana Blouse | Blouse Korea | Blouse Wanita | Atasan Wanita - bw',
                'description' => 'Katun Rayon Nyaman, adem, menyerap keringat menjadikannya tidak gerah saat kamu kenakan, dan mudah di setrika. Teksturnya lembut dan ringan sehingga nyaman kamu pakai sehari-hari.',
                'rating' => 4.5,
                'stock' => 250,
                'price' => 112000,
                'sold' => 70,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/2/20/3ff1d73d-c0f6-4f98-84c4-c75c48d2b1c6.jpg'
            ],
            [
                'id' => '9',
                'name' => 'Lee Vierra Loraine Long Sleeve Crop Top, Atasan Wanita - Baby Blue, L-XL',
                'description' => 'Loraine Long Sleeve Crop Top - Cocok untuk digunakan sehari" dan di mix and match sesuai gaya kamu. - Bahan yang lembut dan tebal, namun tidak panas. - Desain yang simple dan warna yang cantik untuk meng-upgrade looks mu. ',
                'rating' => 5,
                'stock' => 250,
                'price' => 230000,
                'sold' => 40,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/4/29/7dfc3edb-ce20-420c-ba38-2d182cb47dbe.jpg'
            ],
            [
                'id' => '10',
                'name' => 'Atasan Wanita / Whitsy White Shirt 23518D5WT - Ninety Degrees - S',
                'description' => 'Barang Produk Asli Ninety DegreesBila barang / ukuran bisa di pilih masuk ke keranjang artinya BARANG PASTI ADA! Pengiriman setiap Senin - Jumat,Sabtu Minggu Tutup',
                'rating' => 5,
                'stock' => 250,
                'price' => 174000,
                'sold' => 8,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/31/d995d4c9-3219-4c7f-8ba6-7803107872b1.jpg'
            ],
            [
                'id' => '11',
                'name' => 'Daster bali | daster jumbo LD 130 panjang 115 - Hijau Botol',
                'description' => 'Daster Bali Daster Jumbo Long Dress Bahan : Rayon (dijamin adem)',
                'rating' => 4.9,
                'stock' => 250,
                'price' => 33999,
                'sold' => 1280,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/6/4/206e9110-7fc6-4b46-a172-6d990b127982.jpg'
            ],
            [
                'id' => '12',
                'name' => 'KIMONO KNIT OUTER ( basic series) - MINT',
                'description' => 'KIMONO KNIT OUTER ! MATERIAL : PREMIUM KNIT SIZE : ALL SIZE MUAT S-XXL HAPPY SHOPPING!',
                'rating' => 4.9,
                'stock' => 250,
                'price' => 89999,
                'sold' => 1280,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/11/4/447d0db1-c6ce-4950-ad34-6bd88be7a38f.jpg'
            ],
            [
                'id' => '13',
                'name' => 'KAORIE MAISON TEE - KAOS WANITA - ATASAN WANITA - LILAC TEE - LILAC',
                'description' => 'MAISON TEE - Free Size Available in Maroon, Army, Mustard, Lilac. Everyday light and comfy tee made with ultra soft cotton with back button details. NOTE: Kancing di belakang tidak bisa di buka.',
                'rating' => 4.9,
                'stock' => 250,
                'price' => 93000,
                'sold' => 60,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/12/7/fdc0d8e2-2bdb-4a4c-9568-7172dddfb30a.png'
            ],
            [
                'id' => '14',
                'name' => 'Setelan Baju Tidur Wanita Celana Panjang Tie Dye Selvia CP - Putih, XXL',
                'description' => '-Bahan Rayon Viscose Adem & Nyaman -Motif tie dye -Full kancing aktif busui -Terdapat 3 varian warna hitam,putih & navy',
                'rating' => 4.7,
                'stock' => 250,
                'price' => 74000,
                'sold' => 90,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/2/17/93214138-8708-4ce6-80d6-ba6172cd1b07.jpg'
            ],
            [
                'id' => '15',
                'name' => 'Blouse Wanita Lengan Pendek Motif Aisthetic Fashion Outer Casual Korea - VIKA MAROON',
                'description' => '-Bahan Rayon Viscose Adem & Nyaman -Motif tie dye -Full kancing aktif busui -Terdapat 3 varian warna hitam,putih & navy',
                'rating' => 4.8,
                'stock' => 250,
                'price' => 59000,
                'sold' => 250,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/8/12/4ffced6e-ac91-4481-9ea5-08c43301f418.jpg'
            ],
        ];

        foreach ($items as $item) {
            Item::firstOrCreate($item);
        }
    }
}
