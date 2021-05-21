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
        ],
        [
            'Model'=>'ASUS ROG Zephyrus G14',
            'Memory'=>"8GB RAM, 1TB M.2 NVMe PCIe 3.0 SSD",
            'Display'=>"14-inch",
            'Platform'=>"Windows 10 Home",
            'Processor'=>"AMD Ryzen 5",
            'Graphics'=>"NVIDIA GeForce GTX 1650Ti",
            'Price'=>"84990",
            'Gallery'=>"https://yourshoppy.com/wp-content/uploads/2020/08/h732-14.png"
        ],
        [
            'Model'=>'Microsoft Surface Pro 7',
            'Memory'=>"8GB RAM 500GB SSD",
            'Display'=>"12.3 inch",
            'Platform'=>"Windows 10 Home",
            'Processor'=>"Intel Core i5 processor-10th Gen",
            'Graphics'=>"Intel Iris Plus",
            'Price'=>"81490",
            'Gallery'=>"https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE4pzvW?ver=ccb8"
        ],
        [
            'Model'=>'Apple MacBook Air',
            'Memory'=>"8GB RAM 512GB SSD",
            'Display'=>"13.3-inch",
            'Platform'=>"MacOS 10.14 Mojave",
            'Processor'=>"Apple M1 chip",
            'Graphics'=>"Apple 8-core GPU",
            'Price'=>"92900",
            'Gallery'=>"https://cdn.vox-cdn.com/thumbor/hiBx82ktV6TWqSRxe-85zy98Q3w=/1400x1050/filters:format(png)/cdn.vox-cdn.com/uploads/chorus_asset/file/19815524/Screen_Shot_2020_03_18_at_8.04.19_AM.png"
        ],
        [
            'Model'=>'Dell XPS-13 2-in-1',
            'Memory'=>"8GB RAM 512 SSD",
            'Display'=>"13.40-inch Touchscreen",
            'Platform'=>"Windows 10 Home",
            'Processor'=>"Intel Core i5 10th Gen",
            'Graphics'=>"Intel Integrated",
            'Price'=>"129990",
            'Gallery'=>"https://i.pcmag.com/imagery/articles/07K9NKS9rOr8E5FioJyiHmg-3.fit_lim.size_1050x.png"
        ],
        [
            'Model'=>'HP Spectre x360 Convertible',
            'Memory'=>"16GB RAM 1TB NVMe SSD",
            'Display'=>"13.5 inch",
            'Platform'=>"Windows 10 Pro",
            'Processor'=>"Intel Evo 11th Generation",
            'Graphics'=>"Intel Iris Xe",
            'Price'=>"198825",
            'Gallery'=>"https://in-media.apjonlinecdn.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/c/0/c06924867_intel_evo_icon.png"
        ],
        [
            'Model'=>'LG gram 17',
            'Memory'=>"8GB RAM, 256GB SSD, 512GB HDD",
            'Display'=>"17.0 inch",
            'Platform'=>"Windows 10 Home",
            'Processor'=>"Intel Core i7 8th Gen",
            'Graphics'=>"Intel UHD Graphics 620",
            'Price'=>"140000",
            'Gallery'=>"https://www.lg.com/uk/images/laptops/MD06153457/gallery/17Z990-V_Laptop_D1.jpg"
        ],
        [
            'Model'=>'ASUS ROG Strix Scar 17',
            'Memory'=>"16GB RAM 1TB NVMe SSD",
            'Display'=>"17.3 inch",
            'Platform'=>"Windows 10 Home",
            'Processor'=>"Intel Core i7 10th Gen",
            'Graphics'=>"NVIDIA GeForce RTX 2080 SUPER  8GB VRAM",
            'Price'=>" 379990",
            'Gallery'=>"https://dlcdnwebimgs.asus.com/gain/11E3DC01-0773-493E-A8A0-9ACB0EF0D030"
        ]
        ]); 
    }
}
