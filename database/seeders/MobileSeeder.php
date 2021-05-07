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
        DB::table('mobile')->insert([
            'Model'=>'Samsung S20 Ultra',
            'Memory'=>"12GB RAM 128GB",
            'Display'=>"6.90-inch",
            'Camera'=>"108MP + 48MP + 12MP + Depth,40 MP selfie",
            'Features'=>"Fingerprint, accelerometer, gyro, proximity, compass, barometer",
            'Price'=>"79,900",
            'gallery'=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.samsung.com%2Fus%2Fbusiness%2Fproducts%2Fmobile%2Fphones%2Fgalaxy-s%2Fgalaxy-s20-ultra-5g-512gb-unlocked-sm-g988uzkexaa%2F&psig=AOvVaw098Su2OQa2AsF5GIzMexys&ust=1620407021152000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOC95IPFtfACFQAAAAAdAAAAABAD"
        ],
        [
            'Model'=>'iPhone 11',
            'Memory'=>", 256GB 4GB RAM",
            'Display'=>"6.1-inch",
            'Camera'=>"12 MP (wide), 1/2.55, 12 MP(ultrawide), 12 MP selfie",
            'Features'=>"Face ID, accelerometer, gyro, proximity, compass, barometer ",
            'Price'=>"69,900",
            'gallery'=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.apple.com%2Fshop%2Fbuy-iphone%2Fiphone-11%2F6.1-inch-display-64gb-red-unlocked&psig=AOvVaw1EMfHTv5dl3dFL81YbSY0N&ust=1620448643488000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCICHr-DftvACFQAAAAAdAAAAABAZ"
        ]
    ); 
    }
}
