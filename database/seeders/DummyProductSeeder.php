<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            [
                'name' => 'Bakso Aci Tulang Rangu',
                'price' => 21000,
                'stock' => 100,
                'image' => 'dummyP1.jpg', // Ensure this file exists in the public/images folder
                'description' => 'Baso Aci Tulang Rangu adalah camilan khas bercita rasa gurih dan kenyal yang memadukan baso aci dengan sensasi tulang rangu yang renyah. Disajikan dengan kuah pedas khas Sunda, produk ini cocok untuk dinikmati kapan saja.'


            ],
            [
                'name' => 'Ikan Krispi',
                'price' => 30000,
                'stock' => 100,
                'image' => 'dummyP2.jpg', // Ensure this file exists in the public/images folder
                'description' => 'Ikan Krispi adalah inovasi olahan ikan yang digoreng dengan balutan tepung renyah untuk menciptakan tekstur yang garing dan rasa yang lezat. '
            ],
            [
                'name' => 'Cangkir dan Morong Tradisional Bercorak Batik',
                'price' => 90000,
                'stock' => 100,
                'image' => 'dummyP3.jpg', // Ensure this file exists in the public/products folder
                'description' => 'Cangkir dan Morong Tradisional Bercorak Batik adalah kerajinan unik yang menggabungkan fungsionalitas dengan seni budaya Indonesia. Dengan desain batik yang elegan, produk ini tidak hanya menjadi perlengkapan minum teh atau kopi, tetapi juga sebagai dekorasi rumah yang eksklusif. '
            ],
            [
                'name' => 'Kukis Kering',
                'price' => 21000,
                'stock' => 100,
                'image' => 'dummyP4.jpg', // Ensure this file exists in the public/products folder
                'description' => 'Kukis Kering adalah camilan yang dibuat dari bahan-bahan pilihan, menghasilkan tekstur renyah dan rasa yang menggoda.'
            ],
            [
                'name' => 'Kupang Krispi',
                'price' => 20000,
                'stock' => 100,
                'image' => 'dummyP5.jpg', // Ensure this file exists in the public/products folder
                'description' => 'Kupang Krispi adalah camilan unik berbahan dasar kupang, hasil laut khas yang diolah menjadi keripik renyah dengan rasa yang gurih dan menggugah selera. '
            ],
            [
                'name' => 'Krupuk Susu',
                'price' => 23000,
                'stock' => 100,
                'image' => 'dummyP6.jpg', // Ensure this file exists in the public/products folder
                'description' => 'Krupuk Susu adalah inovasi kerupuk renyah berbahan dasar susu, memberikan cita rasa gurih dengan sentuhan creamy yang khas. Cocok untuk dinikmati sebagai camilan ringan atau pelengkap hidangan, Krupuk Susu menjadi pilihan unik yang kaya akan gizi.'
            ],
            [
                'name' => 'Krupuk Kupang',
                'price' => 20000,
                'stock' => 100,
                'image' => 'dummyP7.jpg', // Ensure this file exists in the public/products folder
                'description' => 'Krupuk Kupang adalah camilan tradisional berbahan dasar kupang segar, diolah dengan bumbu khas untuk menciptakan tekstur renyah dan rasa gurih alami. Kerupuk ini membawa cita rasa laut yang otentik, menjadikannya favorit bagi pecinta makanan khas pesisir.  '
            ],
            [
                'name' => 'Tas Rajutan',
                'price' => 210000,
                'stock' => 100,
                'image' => 'dummyP8.jpg', // Ensure this file exists in the public/images folder
                'description' => 'Tas Rajutan adalah produk handmade yang menggabungkan kreativitas dan keindahan seni kerajinan tangan. Dibuat dengan teknik rajutan tradisional menggunakan benang berkualitas, tas ini hadir dengan berbagai model dan warna yang stylish namun tetap memiliki sentuhan klasik. Cocok untuk digunakan dalam berbagai kesempatan, baik formal maupun santai, Tas Rajutan tidak hanya fungsional, tetapi juga menjadi aksesori fashion yang unik dan berkelas.'
            ],
        ]);
    }
}
