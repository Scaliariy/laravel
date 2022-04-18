<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SkusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('skus')->delete();

        $skus = array (
            0 =>
                array (
                    'id' => 40,
                    'product_id' => 13,
                    'image' => 'images/products_apteka/folieva-kyslota-tabletky-1-mh-30-sht.jpeg',
                ),
            1 =>
                array (
                    'id' => 45,
                    'product_id' => 17,
                    'image' => 'images/products_apteka/yodofol-tabletky-60-sht.jpeg',
                ),
            2 =>
                array (
                    'id' => 49,
                    'product_id' => 18,
                    'image' => 'images/products_apteka/osokor-pyvni-drizhdzhi-dytyachi-tabletky-0-5-h-100-sht.jpeg',
                ),
            3 =>
                array (
                    'id' => 50,
                    'product_id' => 21,
                    'image' => 'images/products_apteka/alfavit-diabet-tabletky-60-sht.jpeg',
                ),
            4 =>
                array (
                    'id' => 51,
                    'product_id' => 22,
                    'image' => 'images/products_apteka/biokaltsevit-poroshok-2-h-30-paketiv.jpeg',
                ),
            5 =>
                array (
                    'id' => 52,
                    'product_id' => 23,
                    'image' => 'images/products_apteka/arbor-vitae-hemp-hel-dlya-dushu-z-ekstraktom-nasinnya-konopli-200-ml-1-flakon.jpeg',
                ),
            6 =>
                array (
                    'id' => 53,
                    'product_id' => 24,
                    'image' => 'images/products_apteka/manorm-coral-antyseptyk-dlya-ruk-sprey-ridyna-50-ml-1-flakon.jpeg',
                ),
            7 =>
                array (
                    'id' => 54,
                    'product_id' => 25,
                    'image' => 'images/products_apteka/kleenex-khustynky-nosovi-z-balzamom-80-sht.jpeg',
                ),
            8 =>
                array (
                    'id' => 55,
                    'product_id' => 26,
                    'image' => 'images/products_apteka/gillette-blue-simple-3-brytvy-odnorazovi-4-sht.jpeg',
                ),
            9 =>
                array (
                    'id' => 56,
                    'product_id' => 27,
                    'image' => 'images/products_apteka/zhelana-sil-dlya-van-morska-naturalna-1-kh-1-paket.jpeg',
                ),
            10 =>
                array (
                    'id' => 57,
                    'product_id' => 28,
                    'image' => 'images/products_apteka/aromatyka-aromakompozytsiya-efirnykh-oliy-zaspokoyuyucha-10-ml-1-flakon.jpeg',
                ),
            11 =>
                array (
                    'id' => 58,
                    'product_id' => 29,
                    'image' => 'images/products_apteka/zelena-apteka-balzam-maska-proty-vypadinnya-volossya-300-ml-1-flakon.jpeg',
                ),
            12 =>
                array (
                    'id' => 59,
                    'product_id' => 30,
                    'image' => 'images/products_apteka/doliva-balzam-dlya-shkiry-navkolo-ochey-15-ml-1-banka.jpeg',
                ),
            13 =>
                array (
                    'id' => 60,
                    'product_id' => 31,
                    'image' => 'images/products_apteka/aflokrem-emolient-dlya-osoblyvo-chutlyvoi-shkiry-50-h-1-tuba.jpeg',
                ),
            14 =>
                array (
                    'id' => 61,
                    'product_id' => 32,
                    'image' => 'images/products_apteka/weleda-dezodorant-dlya-cholovikiv-roll-on-24-hodyny-50-ml-1-flakon.jpeg',
                ),
            15 =>
                array (
                    'id' => 62,
                    'product_id' => 33,
                    'image' => 'images/products_apteka/alkom-3001-bandazh-fiksuyuchyy-dlya-homilkovostopnoho-suhlobu-bavovnyanyy-rozmir-4-1-sht.jpeg',
                ),
            16 =>
                array (
                    'id' => 63,
                    'product_id' => 34,
                    'image' => 'images/products_apteka/pharmasco-cito-test-test-systema-dlya-diahnostyky-cyfilisu-1-sht.jpeg',
                ),
            17 =>
                array (
                    'id' => 64,
                    'product_id' => 35,
                    'image' => 'images/products_apteka/perlyna-bynt-marlevyy-nesterylnyy-5-m-kh-10-sm-1-sht.jpeg',
                ),
            18 =>
                array (
                    'id' => 65,
                    'product_id' => 36,
                    'image' => 'images/products_apteka/kyivhuma-dzhhut-esmarkha-krovospynnyy-humovyy-1-sht.jpeg',
                ),
            19 =>
                array (
                    'id' => 66,
                    'product_id' => 37,
                    'image' => 'images/products_apteka/maska-medychna-nesterylna-z-vushkamy-1-sht.jpeg',
                ),
            20 =>
                array (
                    'id' => 67,
                    'product_id' => 38,
                    'image' => 'images/products_apteka/novokain-darnytsya-rozchyn-dlya-inektsiy-0-5-2-ml-10-ampul.jpeg',
                ),
            21 =>
                array (
                    'id' => 68,
                    'product_id' => 39,
                    'image' => 'images/products_apteka/emsef-1000-poroshok-dlya-inektsiy-1000-mh-1-flakon.jpeg',
                ),
            22 =>
                array (
                    'id' => 69,
                    'product_id' => 40,
                    'image' => 'images/products_apteka/ampitsylin-poroshok-dlya-inektsiy-0-5-h-1-flakon.jpeg',
                ),
            23 =>
                array (
                    'id' => 70,
                    'product_id' => 41,
                    'image' => 'images/products_apteka/medakson-poroshok-dlya-inektsiy-2-h-10-flakoniv.jpeg',
                ),
            24 =>
                array (
                    'id' => 71,
                    'product_id' => 42,
                    'image' => 'images/products_apteka/velaksyn-kapsuly-150-mh-28-sht.jpeg',
                ),
        );

        for ($i = 0; $i < count($skus); $i++) {
            $skus[$i]['count'] = rand(0, 100);
            $skus[$i]['price'] = mt_rand(10, 1000)*lcg_value();
            $skus[$i]['created_at'] = Carbon::now();
            $skus[$i]['updated_at'] = Carbon::now();
        }

        \DB::table('skus')->insert($skus);


    }
}
