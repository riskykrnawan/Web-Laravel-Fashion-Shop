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
                'reviewer' => 414,
                'stock' => 250,
                'price' => 175000,
                'sold' => 489,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/29/9572200f-5dae-4755-b2c3-e5f2a099eafc.jpg',
                'category' => 'women'
            ],
            [
                'id' => '2',
                'name' => 'Arshmaya Abaya Series Code E',
                'description' => 'Abaya nuansa ethnic dengan sentuhan warna antique',
                'rating' => 4.3,
                'reviewer' => 14,
                'stock' => 250,
                'price' => 300000,
                'sold' => 250,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/30/d747c9b7-3726-485c-b19e-a3a6eebb24b6.jpg',
                'category' => 'women'
            ],
            [
                'id' => '3',
                'name' => 'Noir Sur Blanc Cardigan 3/4 Sleeve Brownmel - Cokelat',
                'description' => 'Outerwear dari Noir Sur Blanc yang comfy dapat menjadi pelengkap tampilan yang stylish. Ladies Cardigan 3/4 Sleeve terbuat dari material knit yang lembut dengan tren warna bold tone. Koleksi tepat untuk gaya simpel yang fashionable.',
                'rating' => 4.9,
                'reviewer' => 23,
                'stock' => 250,
                'price' => 299000,
                'sold' => 1420,
                'photo' => 'https://images.tokopedia.net/img/cache/900/product-1/2019/4/28/38861771/38861771_8d25e710-ac66-4b44-a404-5eafd3ca4606_1850_1850',
                'category' => 'women'
            ],
            [
                'id' => '4',
                'name' => 'This Is April - Kemeja Wanita Elayna Top Grey',
                'description' => 'This Is April - Kemeja Wanita Elayna Top Grey - 179347Kemeja wanita motif garis garis dengan detail kerah reguler dan bagian depan full kancing, bisa di mix and match dengan celana denim dan sepatu sneakers.',
                'rating' => 4.9,
                'reviewer' => 185,
                'stock' => 250,
                'price' => 199000,
                'sold' => 65,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/4/1/b68781c3-9a6a-4bd8-ab25-3907eac33112.jpg',
                'category' => 'women'
            ],
            [
                'id' => '5',
                'name' => 'Sweater Korean Style Long Sleeve Fashion Dress TEAM STYLE',
                'description' => 'merupakan salah satu lini pakaian terbaik dan berkualitas tinggi dengan kualitas terbaik dan harga terjangkau . Dibuat dengan bahan cotton yang nyaman untuk menemani harimu.',
                'rating' => 4.4,
                'reviewer' => 114,
                'stock' => 250,
                'price' => 119000,
                'sold' => 8,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/16/d3e5b541-494b-4572-bbe6-a7cb6d32441c.jpg',
                'category' => 'women'
            ],
            [
                'id' => '6',
                'name' => 'Daster Ibu Menyusui Trendy Kekinian Motif Untir - Merah',
                'description' => 'Katun Rayon Nyaman, adem, menyerap keringat menjadikannya tidak gerah saat kamu kenakan, dan mudah di setrika. Teksturnya lembut dan ringan sehingga nyaman kamu pakai sehari-hari.',
                'rating' => 4.5,
                'reviewer' => 105,
                'stock' => 250,
                'price' => 60000,
                'sold' => 54,
                'photo' => 'https://images.tokopedia.net/img/cache/900/hDjmkQ/2022/8/14/01a236ee-6518-42d5-b748-5fdbe36b8afe.jpg',
                'category' => 'women'
            ],
            [
                'id' => '7',
                'name' => 'Jacket Wanita | Yungmii Jaket | Blazer Wanita Kantoran - army',
                'description' => '🌸 Bahan : American Drill Premium \n 🌸 Lingkar Dada : 100-105 cm \n 🌸 Panjang : 60-70 cm \n 🌸 All Size Fit To L',
                'rating' => 4.6,
                'reviewer' => 79,
                'stock' => 250,
                'price' => 130000,
                'sold' => 20,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/2/6/61b0a3a9-518a-4de8-b7ca-8d87df95ba86.jpg',
                'category' => 'women'
            ],
            [
                'id' => '8',
                'name' => 'Chana Blouse | Blouse Korea | Blouse Wanita | Atasan Wanita - bw',
                'description' => 'Katun Rayon Nyaman, adem, menyerap keringat menjadikannya tidak gerah saat kamu kenakan, dan mudah di setrika. Teksturnya lembut dan ringan sehingga nyaman kamu pakai sehari-hari.',
                'rating' => 4.5,
                'reviewer' => 87,
                'stock' => 250,
                'price' => 112000,
                'sold' => 70,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/2/20/3ff1d73d-c0f6-4f98-84c4-c75c48d2b1c6.jpg',
                'category' => 'women'
            ],
            [
                'id' => '9',
                'name' => 'Lee Vierra Loraine Long Sleeve Crop Top, Atasan Wanita - Baby Blue, L-XL',
                'description' => 'Loraine Long Sleeve Crop Top - Cocok untuk digunakan sehari" dan di mix and match sesuai gaya kamu. - Bahan yang lembut dan tebal, namun tidak panas. - Desain yang simple dan warna yang cantik untuk meng-upgrade looks mu. ',
                'rating' => 5,
                'reviewer' => 43,
                'stock' => 250,
                'price' => 230000,
                'sold' => 40,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/4/29/7dfc3edb-ce20-420c-ba38-2d182cb47dbe.jpg',
                'category' => 'women'
            ],
            [
                'id' => '10',
                'name' => 'Atasan Wanita / Whitsy White Shirt 23518D5WT - Ninety Degrees - S',
                'description' => 'Barang Produk Asli Ninety DegreesBila barang / ukuran bisa di pilih masuk ke keranjang artinya BARANG PASTI ADA! Pengiriman setiap Senin - Jumat,Sabtu Minggu Tutup',
                'rating' => 5,
                'reviewer' => 41,
                'stock' => 250,
                'price' => 174000,
                'sold' => 8,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/31/d995d4c9-3219-4c7f-8ba6-7803107872b1.jpg',
                'category' => 'women'
            ],
            [
                'id' => '11',
                'name' => 'Daster bali | daster jumbo LD 130 panjang 115 - Hijau Botol',
                'description' => 'Daster Bali Daster Jumbo Long Dress Bahan : Rayon (dijamin adem)',
                'rating' => 4.9,
                'reviewer' => 21,
                'stock' => 250,
                'price' => 33999,
                'sold' => 1280,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/6/4/206e9110-7fc6-4b46-a172-6d990b127982.jpg',
                'category' => 'women'
            ],
            [
                'id' => '12',
                'name' => 'Kimono Knit Outer ( basic series) - Mint',
                'description' => 'Kimono Knit Outer ! MATERIAL : PREMIUM KNIT SIZE : ALL SIZE MUAT S-XXL HAPPY SHOPPING!',
                'rating' => 4.9,
                'reviewer' => 1214,
                'stock' => 250,
                'price' => 89999,
                'sold' => 1280,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/11/4/447d0db1-c6ce-4950-ad34-6bd88be7a38f.jpg',
                'category' => 'women'
            ],
            [
                'id' => '13',
                'name' => 'Kaorie Masion Tee - Kaos Wanita - Atasan Wanite - Lilac Tee - Lilac',
                'description' => 'Masion Tee - Free Size Available in Maroon, Army, Mustard, Lilac. Everyday light and comfy tee made with ultra soft cotton with back button details. NOTE: Kancing di belakang tidak bisa di buka.',
                'rating' => 4.9,
                'reviewer' => 2414,
                'stock' => 250,
                'price' => 93000,
                'sold' => 60,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/12/7/fdc0d8e2-2bdb-4a4c-9568-7172dddfb30a.png',
                'category' => 'women'
            ],
            [
                'id' => '14',
                'name' => 'Setelan Baju Tidur Wanita Celana Panjang Tie Dye Selvia CP - Putih, XXL',
                'description' => '-Bahan Rayon Viscose Adem & Nyaman -Motif tie dye -Full kancing aktif busui -Terdapat 3 varian warna hitam,putih & navy',
                'rating' => 4.7,
                'reviewer' => 74,
                'stock' => 250,
                'price' => 74000,
                'sold' => 90,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/2/17/93214138-8708-4ce6-80d6-ba6172cd1b07.jpg',
                'category' => 'women'
            ],
            [
                'id' => '15',
                'name' => 'Blouse Wanita Lengan Pendek Motif Aisthetic Fashion Outer Casual Korea - VIKA MAROON',
                'description' => '-Bahan Rayon Viscose Adem & Nyaman -Motif tie dye -Full kancing aktif busui -Terdapat 3 varian warna hitam,putih & navy',
                'rating' => 4.8,
                'reviewer' => 24,
                'stock' => 250,
                'price' => 59000,
                'sold' => 250,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/8/12/4ffced6e-ac91-4481-9ea5-08c43301f418.jpg',
                'category' => 'women'
            ],
            [
                'id' => '16',
                'name' => 'Insurgent Club - Tshirt Kaos Oversize Basic White - M,Putih',
                'description' => "On model size M
                TB 175CM
                BB 50KG
                ____
                Bahan: Heavyweight Cotton 220 gsm
                - Benang ukuran 20s
                - Teksture bahan Kasar
                - Bahan yang jauh lebih tebal dari pada t-shirt pada umumnya
                - Mempunyai retensi panas yang lebih baik
                - Karena bahannya jauh lebih tebal daripada kaos lainya, Anda biasanya akan menemukan bahwa mereka bertahan lebih lama dan terus mempertahankan warnanya setelah beberapa kali pencucian.
                
                Aplikasi Detail: Embroidery (bordir)
                - Bordir menggunakan benang, jahitan rapi
                - Menggunakan kain laken khusus bordir
                - Tekstur kasar.
                ",
                'rating' => 4.8,
                'reviewer' => 624,
                'stock' => 250,
                'price' => 79000,
                'sold' => 250,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/8/10/241038d9-4180-455b-8b85-e63a1ee90531.jpg',
                'category' => 'men'
            ],
            [
                'id' => '17',
                'name' => 'Hammer Man Basic Tee Online Z1TO001-G2 - S',
                'description' => "- Hammer Kaos Polos Pria Lengan pendek

                - Warna Green
                
                - Berbahan Cotton 24S
                
                - Detail logo embrodary
                
                
                - Standart ukuran ( dalam cm ) :
                
                - Lebar Pundak X Lebar dada X Panjang baju
                
                - S : 44 x 51 X 69
                
                - M : 45 X 53 X 71
                
                - L : 46 X 55 X 73
                
                - XL : 47 X 58 X 75
                ",
                'rating' => 4.8,
                'reviewer' => 24,
                'stock' => 250,
                'price' => 59000,
                'sold' => 250,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/9/7/c4025d2a-cfbc-40d8-ba13-024cd7bb0500.jpg',
                'category' => 'men'
            ],
            [
                'id' => '18',
                'name' => 'MATSUDA Kaos Polo Shirt Pria Kerah Aioi - WHITE, L',
                'description' => "Size:
                uk S: LD 100 cm; PJ 68 cm
                uk M: LD 104 cm; PJ 70 cm
                uk L: LD 108 cm; PJ 72 cm
                uk XL: LD 112 cm; PJ 74 cm
                uk XXL: LD 116 cm; PJ 76 cm
                
                Model memakai ukuran: L                
                ",
                'rating' => 4.8,
                'reviewer' => 254,
                'stock' => 250,
                'price' => 79000,
                'sold' => 22,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/6/14/b1f0a432-6a85-4fd8-9c23-0dd105ed727d.jpg',
                'category' => 'men'
            ],
            [
                'id' => '19',
                'name' => 'Ripple Summer Shirt in Cream',
                'description' => "Antidot Studios x Novere
                Summer To Remember
                
                Ripple Summer Shirt in Cream
                
                All Size / Oversized Fit
                Fit to XL               
                ",
                'rating' => 5,
                'reviewer' => 6,
                'stock' => 250,
                'price' => 429000,
                'sold' => 10,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/10/24/e9c1a546-dce1-4dd3-ab9a-42fc306eded7.jpg',
                'category' => 'men'
            ],
            [
                'id' => '20',
                'name' => 'Lemone Combed Spandek Oversize Polos Pria Series 2 - Mustard, L',
                'description' => "Material: Combed Spandek
                Size: S, M, L, XL, XXL
                Gramasi: 200 grm
                Model Memakai Ukuran: L
                
                Warna :
                Biru Muda, Putih, Hijau Botol, Army, Abu Muda, Misty, Kuning, Merah,Hijau Muda, Kuning Muda                            
                ",
                'rating' => 5,
                'reviewer' => 6,
                'stock' => 250,
                'price' => 59000,
                'sold' => 10,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/11/20/2e7e7a1c-ceed-4b3c-845f-bd313170e0e2.png',
                'category' => 'men'
            ],
            [
                'id' => '21',
                'name' => 'Kale Kaos Polos Cotton Combed 30S Lengan Pendek - Tshirt Arion - AR MISTY GREY, L',
                'description' => "Kaos premium berbahan dasar cotton combed 30S. Terbuat dari bahan 100% cotton combed premium 30S dan telah melalui proses double softing, memberikan sensasi lembut dan sejuk saat digunakan. Kain katun memiliki elastisitas dan daya serap keringat sangat baik, sehingga nyaman digunakan sehari-hari. Kaos basic Arion tersedia dalam banyak pilihan warna menarik.

                Model basic unisex cocok untuk pria dan wanita.
                • Lengan pendek
                • Asian fit (cocok untuk badan orang asia )
                membuat bentuk badan lebih terlihat dan lebih berisi .
                • Kerah bulat
                • Tinggi model 183cm, menggunakan ukuran L
                
                Detail size chart ( Tinggi X Lebar )
                • S = 68 X 49 cm
                • M = 70 X 51 cm
                • L = 72 X 53 cm
                • XL= 74 X 55 cm
                • XXL= 75 X 56 cm
                NB : toleransi 1-2cm
                
                Panduan perkiraan size product KALE :
                S = 55-62 kg , tinggi 160 - 170 cm
                M = 63-70 kg , tinggi 165 - 175 cm
                L = 70-75 kg , tinggi 170 - 180 cm
                XL = 75-79 kg , tinggi 170 - 185 cm
                XXL = 80 kg ++ , tinggi 170 - 185 cm
                ",
                'rating' => 4.2,
                'reviewer' => 2026,
                'stock' => 250,
                'price' => 63000,
                'sold' => 4400,
                'photo' => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2022/7/2/668c972e-295b-48a5-b39a-fa11de0d699a.jpg',
                'category' => 'men'
            ],
            [
                'id' => '22',
                'name' => 'Baju kaos GIRVA lengan pendek / kaos trendy pria - M, Putih',
                'description' => "KAOS GIRVA TERBARU
                MATT COTTON SPANDEK PREMIUM
                TEKSTUR LEMBUT DINGIN NYAMAN DIPAKAI
                
                TERSEDIA 3 UKURAN M-L-XL
                -M=LD 96CM PJG 66CM
                -L=LD 98CM PJG 68CM
                -XL=LD 100CM PJG 70CM
                
                BERAT PRODUCT 180GR
                1KG MUAT 7PCS
                
                DESIGN MOTIF RASTER REAL PICT
                DI SABLON KUALITAS PREMIUM
                JAHITAN RAPI STANDAR DISTRO
                ",
                'rating' => 4.5,
                'reviewer' => 172,
                'stock' => 250,
                'price' => 35150,
                'sold' => 245,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/6/1/cb0bf402-2ef6-42fe-9e9c-f553342c0f90.jpg',
                'category' => 'men'
            ],
            [
                'id' => '23',
                'name' => 'Kemeja Polos Pria Slimfit Lengan panjang Kemeja Kasual Kemeja Formal - dark grey, XL',
                'description' => "✓size M lebar dada 50cm panjang baju 70cm lingkar badan 100cm , Panjang Lengan 56cm

                ✓size L lebar dada 52cm panjang baju 72cm lingkar badan 104cm , Panjang Lengan 58cm
                
                ✓size XL lebar dada 54cm panjang baju 74cm lingkar badan 108cm , Panjang Lengan 60cm
                
                ✓size XXL lebar dada 56cm panjang baju 75cm lingkar badan 112cm , Panjang Lengan 62cm
                
                ✓size XXXL lebar dada 58cm panjang baju 76cm lingkar badan 116cm , Panjang Lengan 63cm
                
                ✓Polos dan simple model kerah ada variasi kancing kecil dan ada saku sebelah kiri..
                
                ✓Banyak Variasi warna
                
                Cocok buat pakaian kerja, ngampus, santai nongkrong maupun acara Formal rekomended
                pilih varian warna dan tambah koleksi kemeja kesukaan",
                'rating' => 4,
                'reviewer' => 139,
                'stock' => 250,
                'price' => 45000,
                'sold' => 215,
                'photo' => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2021/2/3/e534206c-e294-4f81-81ce-a068e27b3a34.jpg',
                'category' => 'men'
            ],
            [
                'id' => '24',
                'name' => 'Kaos Polo Shirt Pria Kaos Kerah Lengan pendek Original Zipper - Light Brown, M',
                'description' => "Kaos polo shirt yang beda dengan yag lain. Desain kerah kemeja (bukan rib) dan variasi zipper yang menambah kesan stylish

                Model slimfit dan ujung bawah baju membentuk curve. Sekarang memakai kaos polo lebih terkesan stylish dengan kaos polo original Broguy
                
                Tinggi Model 177 cm
                Berat Badan Model 73 kg
                Size Model L
                
                Size Chart :
                S : Lebar 46cm x Panjang 67cm
                M : Lebar 48cm x Panjang 71cm
                L : Lebar 50cm x Panjang 73cm
                XL : Lebar 53cm x Panjang 75cm
                XXL : Lebar 55cm x Panjang 77cm
                ",
                'rating' => 4,
                'reviewer' => 840,
                'stock' => 250,
                'price' => 59400,
                'sold' => 2024,
                'photo' => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2022/2/21/40f4d86b-33f1-4ea6-be89-0327b5f322ad.jpg',
                'category' => 'men'
            ],
            [
                'id' => '25',
                'name' => 'Kaos Jumbo Pria Polos 30s Bigsize Army',
                'description' => "KAOS EXTRA JUMBO
                POLOS
                BAHAN : FULL COTTON COMBED 30s
                
                UKURAN LD PJG
                2XL 56 74
                3XL 61 78
                4XL 64 80
                5XL 67 82
                6XL 73 87
                7XL 79 92
                -toleransi ukuran 1-2cm
                
                GARANSI : -JIKA BARANG YANG DITERIMA RUSAK ATAU CACAT DI GANTI BARU
                -BAHAN ASLI KATUN BILA BUKAN DI GARANSI UANG KEMBALI
                Spesifikasi Produk
                ==================
                - Kaos Premium Export Quality
                - Bahan 100% Cotton Combed 30s
                - Adem dan Nyaman dipakai
                - Jahitan Rantai
                ",
                'rating' => 4,
                'reviewer' => 902,
                'stock' => 250,
                'price' => 54400,
                'sold' => 3024,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/6/6/8cae0928-0666-493e-ba49-4c3b1aea2d95.jpg',
                'category' => 'men'
            ],
            [
                'id' => '26',
                'name' => 'VENGOZ Kemeja Oxford Pria Slim Fit - Khaki - S',
                'description' => "Kemeja Oxford Pria
                Kode : KMLX6
                Size Yang Tersedia Sesuai Variasi
                
                - Cotton Oxford
                - Original 100%
                - Model Slim Fit
                - Size Lokal
                - Nyaman Dipakai
                
                size Lebar dada x panjang
                S = 49x68 cm
                M = 50x69 cm
                L = 52x72 cm
                XL = 55x75 cm
                ",
                'rating' => 4,
                'reviewer' => 687,
                'stock' => 100,
                'price' => 139000,
                'sold' => 750,
                'photo' => 'https://images.tokopedia.net/img/cache/900/product-1/2019/12/21/28456790/28456790_5dab5c55-a97e-432d-b5f0-ca62102e8a0b_1011_1011',
                'category' => 'men'
            ],
            [
                'id' => '27',
                'name' => 'Kaos Kerah Polo Pria Original - Hijau Twotone, XL',
                'description' => "Detail :
                + Bahan Dijamin 100% Katun Lacost Premium yang memiliki tingkat kalembutan yang tinggi
                + Bahan nyaman,halus dan yang pasti menyerap keringat
                + Memiliki jahitan yang sangat rapi
                + Foto katalog di atas memiliki kemiripan warna 100% dengan asli produk di karenakan hasil jepretan sendiri
                + Bayar di tempat tersedia (COD)
                
                Perawatan
                - Cuci terpisah
                - Gunakan deterjen lembut
                - Setrika dengan rapi
                
                Detail ukuran :
                M = P/72 L/50 cm
                L = P/74 L/52 cm
                XL = P/76 L/54 cm
                
                Toleransi Ukuran +- 2 cm
                ",
                'rating' => 4,
                'reviewer' => 60,
                'stock' => 100,
                'price' => 106650,
                'sold' => 100,
                'photo' => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2022/3/15/353ece91-1eab-463b-82bd-dcca388309e8.jpg',
                'category' => 'men'
            ],
            [
                'id' => '28',
                'name' => 'Kelvin Kemeja Polos Pria Lengan Panjang Kemeja Cowo Formal Slim Fit - Maroon, M',
                'description' => "REAL PICTURE
                BAHAN KATUN STRETCH
                MODEL SLIM FIT
                KANTONG HIDUP
                SIZE CHAT :
                LINGKAR DADA X PANJANG BAJU
                - M : 100CM X 70CM
                - L : 102CM X 70CM
                - XL : 104CM X 71CM
                ",
                'rating' => 4,
                'reviewer' => 742,
                'stock' => 100,
                'price' => 64000,
                'sold' => 1040,
                'photo' => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2022/3/14/ca14132f-431c-4023-bc60-c0adc1a04439.jpg',
                'category' => 'men'
            ],
            [
                'id' => '29',
                'name' => 'Kaos Kemeja Seragam Polos Polo Kerah Pria - Hijau Army M',
                'description' => "REAL PICTURE
                BAHAN KATUN STRETCH
                MODEL SLIM FIT
                KANTONG HIDUP
                SIZE CHAT :
                LINGKAR DADA X PANJANG BAJU
                - M : 100CM X 70CM
                - L : 102CM X 70CM
                - XL : 104CM X 71CM
                ",
                'rating' => 4,
                'reviewer' => 5210,
                'stock' => 100,
                'price' => 29800,
                'sold' => 14040,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/9/17/0858ada0-e593-420b-957e-a2b200d89da0.jpg',
                'category' => 'men'
            ],
            [
                'id' => '30',
                'name' => "Miabelle Sleepsuit panjang dengan model kaki tertutup",
                'description' =>"Bahan : Kaos Double Knit, tersertifikasi SNI
                
                Ukuran :
                S -- Usia 0-6 bulan - LD 26cm, P 53cm
                M -- Usia 6-12 bulan - LD 29cm, P 60cm
                ",
                'rating' => 4,
                'reviewer' => 5210,
                'stock' => 452,
                'price' => 39000,
                'sold' => 750,
                'photo' => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2021/8/3/f569d138-5c6d-4c5c-8e81-061eeb6c3230.jpg',
                'category' => 'children'
            ],
            [
                'id' => '31',
                'name' => "Baju bayi dan celana Unisex",
                'description' => "
                Detail Ukuran :
                
                SIZE 55
                LEBAR DADA : 26 CM
                PANJANG BAJU : 34 CM
                PANJANG CELANA : 24 CM
                BERAT DISARANKAN : 6-8 KG (PATOKAN DI BERAT BUKAN USIA)
                
                SIZE 60
                LEBAR DADA : 27 CM
                PANJANG BAJU : 37 CM
                PANJANG CELANA : 26 CM
                BERAT DISARANKAN : 8-10 KG ( PATOKAN DI BERAT BADAN BUKAN USIA )
                
                SIZE 65
                LEBAR DADA : 30 CM
                PANJANG BAJU : 39 CM
                PANJANG CELANA : 29 CM
                BERAT DISARANKAN : 10-12 KG ( PATOKAN DI BERAT BADAN BUKAN USIA )
                
                SIZE 70
                LEBAR DADA : 32 CM
                PANJANG BAJU : 41 CM
                PANJANG CELANA : 31 CM
                BERAT DISARANKAN : 12-15 KG ( PATOKAN DI BERAT BADAN BUKAN USIA )
                
                SIZE 75
                LEBAR DADA : 34 CM
                PANJANG BAJU : 43 CM
                PANJANG CELANA : 33 CM
                BERAT DISARANKAN : 15-18 KG ( PATOKAN DI BERAT BADAN BUKAN USIA )                
                ",
                'rating' => 5,
                'reviewer' => 5210,
                'stock' => 123,
                'price' => 25000,
                'sold' => 245,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/12/14/f8a467cf-5a73-4730-abd4-6e501295e832.jpg',
                'category' => 'children'
            ],
            [
                'id' => '32',
                'name' => "Baju bayi laki-laki Motif Naruto / Jumper Lucu - 80",
                'description' => "Size, panjang, Lingkar dada, Usia
                59 50cm 26cm 0-3bulan
                66 53cm 27cm 3-6bulan
                73 56cm 28cm 6-9bulan
                80 59cm 29cm 9-12bulan
                90 62cm 30cm 12-24bulan
                ",
                'rating' => 4.9,
                'reviewer' => 31,
                'stock' => 123,
                'price' => 98000,
                'sold' => 40,
                'photo' => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2021/9/18/42ccf9d5-daf4-4516-b648-79a3b26f5a6a.jpg',
                'category' => 'children'
            ],
            [
                'id' => '33',
                'name' => "Bohopanna Long Ara Bodysuit - Jumper Bayi - Baju Anak Perempuan - LIMONGES, 0-6 Bulan",
                'description' => "-> Umur 0 sd 3 Bulan)
                LD : 44 cm, PB : 38 cm
                -> Umur 3 sd 6 Bulan)
                LD : 46 cm, PB : 40 cm
                -> Umur 6 sd 9 Bulan)
                LD : 48 cm, PB : 42 cm
                -> Umur 9 sd 12 Bulan)
                LD : 50 cm, PB : 44 cm
                -> Umur 12 sd 18 Bulan)
                LD : 52 cm, PB : 46 cm                
                ",
                'rating' => 4.9,
                'reviewer' => 96,
                'stock' => 123,
                'price' => 68000,
                'sold' => 140,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/11/27/377509d6-33c2-43cd-bbdf-64ab48bd8cbf.png',
                'category' => 'children'
            ],
            [
                'id' => '34',
                'name' => "Jumper Baby Boy Garis Merah/Jumper Tuxedo Maroon 0-2 Tahun / IMPORT (0-3) Bulan",
                'description' => "BAHAN : KATUN

                Ukuran :
                
                59
                Lingkar Dada : 50cm
                Panjang Baju : 52cm
                Panjang Lengan : 22cm
                *disarankan bayi 0-3 bulan dengan tinggi badan maks 59cm
                
                
                66
                Lingkar Dada : 52cm
                Panjang Baju : 55cm
                Panjang Lengan : 24cm
                *disarankan bayi 3-6 bulan dengan tinggi badan maks 66cm
                
                73
                Lingkar Dada : 54cm
                Panjang Baju : 58cm
                Panjang Lengan : 26cm
                *disarankan bayi 6-9 bulan dengan tinggi badan maks 73cm
                
                80
                Lingkar Dada : 56cm
                Panjang Baju : 61cm
                Panjang Lengan : 28cm
                *disarankan bayi 9-12 bulan dengan tinggi badan maks 80cm
                
                90
                Lingkar Dada : 58cm
                Panjang Baju : 64cm
                Panjang Lengan : 30cm
                *disarankan bayi 12-24 bulan dengan tinggi badan maks 90cm           
                ",
                'rating' => 5,
                'reviewer' => 42,
                'stock' => 123,
                'price' => 125000,
                'sold' => 73,
                'photo' => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2022/1/17/72d2f674-9a7f-4359-b4ab-d8e692f4f44b.jpg',
                'category' => 'children'
            ],
            [
                'id' => '35',
                'name' => "Dress bayi 0-4 tahun FREE TOPI motif ANNE",
                'description' => "PAKET TERMASUK DRESS + TOPI

                UKURAN (USIA HANYA PATOKAN)
                
                S (6-12bulan)
                LD : 29cm
                PG : 39cm
                
                M (1-2tahun)
                LD : 31cm
                PG : 40cm
                
                L (2-3tahun)
                LD : 32cm
                PG : 43cm
                
                XL (3-4tahun)
                LD : 34cm
                PG : 45cm                     
                ",
                'rating' => 5,
                'reviewer' => 42,
                'stock' => 37,
                'price' => 89000,
                'sold' => 95,
                'photo' => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2022/5/11/70091a86-846a-4892-b924-6843a6c391a3.jpg',
                'category' => 'children'
            ],
            [
                'id' => '36',
                'name' => "Porto - Sepatu Wanita Flat Shoes Slip On Korea Casual Kantor KSM, 36",
                'description' => "Ukuran : 36-40

                Bahan : Karet Kuat
                
                Size Chart Ladies Sandal & Sepatu
                
                36 : 21,5 - 22,5 cm
                
                37 : 22,6 - 23,5 cm
                
                38 : 23,6 - 24,5 cm
                
                39 : 24,6 - 25,5 cm
                
                40 : 25,6 - 26,5 cm                                 
                ",
                'rating' => 4.9,
                'reviewer' => 387,
                'stock' => 37,
                'price' => 54900,
                'sold' => 534,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/6/7/87301c9b-937c-4e9e-8372-60a441ddd596.jpg',
                'category' => 'shoes'
            ],
            [
                'id' => '37',
                'name' => "Jam Tangan Pria | Men's watch Hannah Martin Original Simple Design - JA1",
                'description' => "I. Spesifikasi Produk
                MERK : Hannah Martin
                ID NO : HM-CH02
                DIAL METER : 40mm
                CASE THICKNESS : 6.9mm
                BAND LENGTH : FREE SIZE
                WEIGHT : ABOUT 38g
                BAND WIDTH : 20mm
                
                II. PARAMETERS
                JAPAN SEIKO TIME MODULE MOVEMENT
                WITHOUT SECOD HAND
                HIGH DENSITY CASE , CLASS A POLISHED
                GENDER : MEN
                HIGH QUALITY LEATHER
                WATER RESISTANCE DEPTH: 3 BAR
                
                PRODUK TERMASUK :
                - Box Hannah Martin
                - Brand Label Hannah Martin
                - BATERAI CADANGAN 1PCS
                - Buku petunjuk manual
                
                PENTING : Dipacking Dengan Buble Wrap + Box Kardus (GRATIS TANPA TAMBAHAN BIAYA)
                ",
                'rating' => 4.9,
                'reviewer' => 1329,
                'stock' => 37,
                'price' => 89000,
                'sold' => 2134,
                'photo' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/13/82322e5e-26a8-4431-a28b-2a0f96161455.jpg',
                'category' => 'accessories'
            ],
        ];

        foreach ($items as $item) {
            Item::firstOrCreate($item);
        }
    }
}
