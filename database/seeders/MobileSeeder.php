<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobiles')->insert([
        [    'Model'=>'Samsung S20 Ultra',
            'Memory'=>"12GB RAM 128GB",
            'Display'=>"6.90-inch",
            'Camera'=>"108MP + 48MP + 12MP + Depth,40 MP selfie",
            'Features'=>"Fingerprint, accelerometer, gyro, proximity, compass, barometer",
            'Price'=>"79900",
            'Gallery'=>"https://ww.etoren.com/upload/images/0.19016700_1581586372_samsung-galaxy-s20-ultra-5g-dual-sim-g988fd-128gb-black-12gb-ram.png"
        ],
        [
            'Model'=>'iPhone 11',
            'Memory'=>"4GB RAM 256GB ",
            'Display'=>"6.1-inch",
            'Camera'=>"12 MP (wide), 1/2.55, 12 MP(ultrawide), 12 MP selfie",
            'Features'=>"Face ID, accelerometer, gyro, proximity, compass, barometer ",
            'Price'=>"69900",
            'Gallery'=>"https://images-na.ssl-images-amazon.com/images/I/71i2XhHU3pL._AC_SX522_.jpg"
        ],
        [
            'Model'=>'Oneplus 9 Pro',
            'Memory'=>"8GB RAM 128GB ",
            'Display'=>"6.70-inch",
            'Camera'=>"48MP + 50MP + 8MP, 16 MP selfie",
            'Features'=>"In-Display Fingerprint, Compass, Proximity sensor, Accelerometer, light sensor, Gyroscope",
            'Price'=>"65900",
            'Gallery'=>"https://www.gizmochina.com/wp-content/uploads/2020/12/oneplus_5011101665_9_pro_128gb_5g_1629057-500x500.jpg"
        ]
        ]); 
    }
}
