<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laptops')->insert([
        [    'Model'=>'Apple Mac Book Pro',
            'Memory'=>"8GB RAM 256GB SSD ",
            'Display'=>"13.30-inch",
            'Platform'=>"macOS",
            'Processor'=>"Intel Core i5 8th Gen 3.9GHz",
            'Graphics'=>"Intel Integrated Iris Plus Graphics 645",
            'Price'=>"116790",
            'Gallery'=>"https://www.notebookcheck.net/uploads/tx_nbc2/Bildschirmfoto_2020-05-22_um_12.01.27.png"
        ],
        [
            'Model'=>'Acer Predator',
            'Memory'=>"16GB RAM 1TB HDD 256GB SDD",
            'Display'=>"15.60-inch",
            'Platform'=>"Windows 10 Home",
            'Processor'=>"Intel Core i7 processor-10th Gen",
            'Graphics'=>"Nvidia GeForce RTX 3060",
            'Price'=>"109990",
            'Gallery'=>"https://static.acer.com/up/Resource/Acer/Laptops/Predator_Helios_300/Images/20200707/Predator-Helios-300_PH317-54_modelpreview.png"
        ],
        [
            'Model'=>'MSI GF63',
            'Memory'=>"64GB RAM 1TB SDD",
            'Display'=>"17.3-inch",
            'Platform'=>"Windows 10 Home",
            'Processor'=>"Intel Core i9 processor-10th Gen",
            'Graphics'=>"Nvidia GeForce RTX 2080 super",
            'Price'=>"250000",
            'Gallery'=>"https://gameprosg.com/wp-content/uploads/2019/08/product_7_20190521134135_5ce38f8f57d72.png"
        ]
        ]); 
    }
}
