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
            'Features'=>"Snapdragon 865(Android 10), Fingerprint, accelerometer, gyro, proximity, compass, barometer",
            'Price'=>"79900",
            'Gallery'=>"https://ww.etoren.com/upload/images/0.19016700_1581586372_samsung-galaxy-s20-ultra-5g-dual-sim-g988fd-128gb-black-12gb-ram.png"
        ],
        [
            'Model'=>'iPhone 11',
            'Memory'=>"4GB RAM 256GB ",
            'Display'=>"6.1-inch",
            'Camera'=>"12 MP (wide), 1/2.55, 12 MP(ultrawide), 12 MP selfie",
            'Features'=>"A13 Bionic(iOS 13), Face ID, accelerometer, gyro, proximity, compass, barometer ",
            'Price'=>"69900",
            'Gallery'=>"https://images-na.ssl-images-amazon.com/images/I/71i2XhHU3pL._AC_SX522_.jpg"
        ],
        [
            'Model'=>'Oneplus 9 Pro',
            'Memory'=>"8GB RAM 128GB ",
            'Display'=>"6.70-inch",
            'Camera'=>"48MP + 50MP + 8MP, 16 MP selfie",
            'Features'=>"Snapdragon 888(Android 11), In-Display Fingerprint, Compass, Proximity sensor, Accelerometer, light sensor, Gyroscope",
            'Price'=>"65900",
            'Gallery'=>"https://www.gizmochina.com/wp-content/uploads/2020/12/oneplus_5011101665_9_pro_128gb_5g_1629057-500x500.jpg"
        ],
        [
            'Model'=>'Google Pixel 5',
            'Memory'=>"8GB RAM 128GB",
            'Display'=>"6.0-inch",
            'Camera'=>"12.2 MP(wide),16 MP(ultrawide), 8 MP(wide)",
            'Features'=>"Snapdragon 765G(Android 11), Fingerprint(rear-mounted), accelerometer, gyro, proximity, compass, barometer",
            'Price'=>"67258",
            'Gallery'=>"https://lh3.googleusercontent.com/M4SHUqpEgLy-VMVkR3xrNeKpSadd0Tnck5OKdLMWi3TSElhWpRAMYuTGFxGicseUCdE59h6vYYDlyAkdDTyAoTMzJ7DZI65cE3oqLN_KCztfwJe4o213eFWevw=s800-c"
        ],
        [
            'Model'=>'Sony Xperia 1 III',
            'Memory'=>"12GB RAM 512GB ",
            'Display'=>"6.5-inch",
            'Camera'=>"12 MP(wide), 12 MP(telephoto), 8 MP(wide)",
            'Features'=>"Snapdragon 888(Android 11), Fingerprint(side-mounted), accelerometer, gyro, proximity, barometer, compass",
            'Price'=>"65999",
            'Gallery'=>"https://drh1.img.digitalriver.com/DRHM/Storefront/Company/sonyemea/images/product/detail/04_xperia_1m2_v2.png"
        ],
        [
            'Model'=>'Apple iPhone SE',
            'Memory'=>"3GB RAM 256GB ",
            'Display'=>"4.7-inch",
            'Camera'=>"12 MP(wide), 7 MP selfie",
            'Features'=>"A13 Bionic(iOS 13), Fingerprint(front-mounted), accelerometer, proximity, gyro, compass, barometer",
            'Price'=>"54900",
            'Gallery'=>"https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-se-red-select-2020_GEO_EMEA?wid=940&hei=1112&fmt=png-alpha&.v=1586574260374"
        ],
        [
            'Model'=>'Samsung Galaxy S21 Ultra',
            'Memory'=>"16GB RAM 512GB",
            'Display'=>"6.8-inch",
            'Camera'=>"108 MP(wide), 10 MP(periscope telephoto), 10 MP(telephoto), 12 MP(ultrawide), 40 MP(wide) Selfie",
            'Features'=>"Snapdragon 888(Android 11), Fingerprint(under display, ultrasonic), accelerometer, gyro, proximity, compass, barometer, Samsung Pay",
            'Price'=>"105999",
            'Gallery'=>"https://images.samsung.com/is/image/samsung/p6pim/levant/galaxy-s21/gallery/levant-galaxy-s21-ultra-5g-g988-371058-sm-g998bztgmea-368334338?$720_576_PNG$"
        ],
        [
            'Model'=>'Samsung Galaxy Note20 Ultra',
            'Memory'=>"12GB RAM 512GB ",
            'Display'=>"6.9-inch",
            'Camera'=>"108 MP(wide), 12 MP(periscope telephoto), 12 MP(ultrawide), 	10 MP(wide) Selfie",
            'Features'=>"Snapdragon 865(Android 10), Fingerprint(under display, ultrasonic), accelerometer, gyro, proximity, compass, barometer",
            'Price'=>"115999",
            'Gallery'=>"https://lh3.googleusercontent.com/o2vVZFzJ14CljMVGYafalRCizIbRX1mvWWqro5rS8d4_6Kou5WPKTCSsy_i8ZSM-7nKwT9BJwleRCP_vStDmDwvll6uuHUdXokN1C-0xw_D5JRMqsnyDHqM=s800-c"
        ],
        [
            'Model'=>'Samsung Galaxy A32',
            'Memory'=>"8GB RAM 128GB ",
            'Display'=>"6.5-inch",
            'Camera'=>"48 MP(wide), 8 MP(ultrawide), 5 MP(macro), 2 MP(depth), 13 MP(wide) Selfie",
            'Features'=>"Mediatek Helio G80(Android 11), Fingerprint(side-mounted), accelerometer, gyro, proximity, compass",
            'Price'=>"24999",
            'Gallery'=>"https://images.samsung.com/is/image/samsung/p6pim/hk_en/sm-a326bzkgtgy/gallery/hk-en-galaxy-a32-5g-a326-sm-a326bzkgtgy-374391526?$624_624_PNG$"
        ],
        [
            'Model'=>'OnePlus 8 Pro',
            'Memory'=>"12GB RAM 256GB",
            'Display'=>"6.78-inch",
            'Camera'=>"48 MP(wide), 8 MP(telephoto), 48 MP(ultrawide), 5 MP(Color filter camera), 16 MP(wide) Selfie",
            'Features'=>"Snapdragon 865(Android 10), Fingerprint(under display, optical), accelerometer, gyro, proximity, compass",
            'Price'=>"54999",
            'Gallery'=>"https://www.gizmochina.com/wp-content/uploads/2019/10/oneplus_8_pro--600x600.png"
        ]
        ]); 
    }
}
