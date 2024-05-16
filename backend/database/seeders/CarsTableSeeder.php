<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->insert([
            [
                'photo1' => 'https://cdn.24.co.za/files/Cms/General/d/3089/b1cf3fb0a479438fabf174b092301c29.jpg',
                'photo2' => 'https://img.autotrader.co.za/17873025',
                'brand' => 'Renault Clio',
                'model' => 2019,
                'number_plate' => "B 1234 ABC",
                'fuel_type' => 'diesel',
                'price' => 30,
                'gearbox' => 'manuel',
                'available' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo1' => 'https://www.razaoautomovel.com/wp-content/uploads/2021/11/Dacia-Duster-4x4-6-scaled_925x520_acf_cropped.jpg',
                'photo2' => 'https://www.topgear.com/sites/default/files/2022/12/Dacia-Duster-on-road-058.jpg',
                'brand' => 'Dacia Duster',
                'model' => 2021,
                'number_plate' => "B 2345 BCA",
                'fuel_type' => 'diesel',
                'price' => 80,
                'gearbox' => 'automatic',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo1' => 'https://location-voiture.ma/uploads/images/cars/slider/572416_ve%CC%81hicule-utilitaire-multispace-berlingo-7-places.jpg',
                'photo2' => 'https://thumbs.img-sprzedajemy.pl/1000x901c/ad/92/ef/citroen-berlingo-xtr-ledy-klimatronik-lift-115-berlingo-560193777.jpg',
                'brand' => 'Citroen Berlingo',
                'model' => 2019,
                'number_plate' => "B 3456 CBA",
                'fuel_type' => 'petrol',
                'price' => 60,
                'gearbox' => 'manuel',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo1' => 'https://www.journalofnomads.com/wp-content/uploads/2019/12/Renting-a-Car-in-Morocco-and-Driving-in-Morocco-e1649421213271.jpg',
                'photo2' => 'https://www.locationvoiture-agadir.fr/timg/phpThumb.php?src=../admin/media/img_vehicule/7c66c06e43509490ea500222f2c7e6e4_001.jpg&w=555&h=331&far=C&bg=FFFFFF&f=png&hash=1787e1341c517d3b249a83bdd1f0eefa',
                'brand' => 'Dacia Logan',
                'model' => 2019,
                'number_plate' => "B 3242 BSA",
                'fuel_type' => 'petrol',
                'price' => 40,
                'gearbox' => 'manuel',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo1' => 'https://sf1.auto-moto.com/wp-content/uploads/sites/9/2016/07/dacia-dokker-1024x768.jpg',
                'photo2' => 'https://www.autoscout24.be/cms-content-assets/1pwJ7zcnchpk3d9ZtAYcDu-4e28845edb0deae0b3d47d4584817b6b-Dacia-Dokker-2013-1280-01-1100.jpg',
                'brand' => 'Dacia Dokker',
                'model' => 2016,
                'number_plate' => "B 3258 NSA",
                'fuel_type' => 'petrol',
                'price' => 40,
                'gearbox' => 'manuel',
                'available' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo1' => 'https://www.oneclickdrive.com/car-for-rent/slider-desktop/Mercedes-Benz_Mayback-S500_2020_10864_10864_3100348325-5_small.jpg?vr=3',
                'photo2' => 'https://img.gocar.be/v7/_cloud_wordpress_/2019/06/mercedes-maybach_s_650_24.jpg',
                'brand' => 'Mercedes Benz',
                'model' => 2019,
                'number_plate' => "B 1 RI",
                'fuel_type' => 'petrol',
                'price' => 80,
                'gearbox' => 'automatic',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
