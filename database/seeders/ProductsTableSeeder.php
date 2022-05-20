<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('products')->delete();

        $products = array(
            0 =>
                array(
                    'id' => 13,
                    'category_id' => 4,
                    'code' => 'folieva-kyslota-tabletky-1-mh',
                    'deleted_at' => null,
                    'description' => 'Фолієва кислота (лат. acidum folicum) — вітамін В9 або Вс, що впливає на кровотворення, стимулює утворення еритроцитів та лейкоцитів, знижує вміст холестерину у крові. При авітамінозі розвивається недокрів\'я.',
                    'description_en' => 'Folic acid tablets 1 mg',
                    'instruction' => 'instructions/folieva-kyslota-tabletky-1-mh.html',
                    'name' => 'Фолієва кислота таблетки 1 мг',
                    'name_en' => 'Folic acid tablets 1 mg',
                ),
            1 =>
                array(
                    'id' => 17,
                    'category_id' => 4,
                    'code' => 'yodofol',
                    'deleted_at' => null,
                    'description' => 'Як дієтична добавка до раціону харчування з метою профілактики дефіциту фолієвої кислоти та йоду, особливо для жінок, які планують вагітність, у період вагітності та годування груддю, а також збагачення раціону населення, що проживає в регіонах з недостатньою кількістю йоду у навколишньому середовищі.',
                    'description_en' => 'As a dietary supplement for the prevention of folic acid and iodine deficiency, especially for women planning pregnancy, during pregnancy and lactation, as well as enriching the diet of the population living in regions with insufficient iodine in the environment.',
                    'instruction' => null,
                    'name' => 'Йодофол таблетки',
                    'name_en' => 'Iodofol tablets',
                ),
            2 =>
                array(
                    'id' => 18,
                    'category_id' => 4,
                    'code' => 'osokor',
                    'deleted_at' => null,
                    'description' => 'В харчуванні дітей Пивні Дріжджі дитячі  - це необхідний комплекс природних білків, мінералів, вітамінів і ферментів, який стимулює процес розпаду протеїнів, що зменшує час всмоктування всіх потрібних препаратів у крові.',
                    'description_en' => 'In children\'s nutrition Children\'s Brewer\'s Yeast is a necessary complex of natural proteins, minerals, vitamins and enzymes that stimulate the process of protein breakdown, which reduces the time of absorption of all necessary drugs in the blood.',
                    'instruction' => 'instructions/osokor-pyvni-drizhdzhi-dytyachi-tabletky-0-5-h-100-sht.html',
                    'name' => 'Осокор Пивні Дріжджі дитячі таблетки 0,5 г',
                    'name_en' => 'Osokor Brewer\'s Yeast baby tablets 0.5 g',
                ),
            3 =>
                array(
                    'id' => 21,
                    'category_id' => 4,
                    'code' => 'alfavit-diabet-tabletky-60-sht',
                    'deleted_at' => null,
                    'description' => 'Може бути рекомендований для використання в раціонах дієтичного харчування осіб, що контролюють рівень цукру крові, як додаткове джерело янтарної та ліпоєвої кислот, вітамінів, макро-, мікроелементів для підтримки оптимального обміну речовин, загального зміцнення організму та відновлення нестачі вітамінів та мікроелементів.',
                    'description_en' => 'It can be recommended for use in the diets of people who control blood sugar levels, as an additional source of succinic and lipoic acids, vitamins, macro-, micronutrients to maintain optimal metabolism, overall strengthening of the body and restore vitamin and micronutrient deficiencies.',
                    'instruction' => null,
                    'name' => 'АлфаВіт Діабет таблетки 60 шт',
                    'name_en' => 'AlphaVit Diabetes tablets 60 pcs',
                ),
            4 =>
                array(
                    'id' => 22,
                    'category_id' => 4,
                    'code' => 'biokaltsevit-poroshok-2-h-30-paketiv',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Біокальцевіт порошок 2 г 30 пакетів',
                    'name_en' => 'Biocalt powder 2 g 30 packets',
                ),
            5 =>
                array(
                    'id' => 23,
                    'category_id' => 5,
                    'code' => 'arbor-vitae-hemp-hel-dlya-dushu-z-ekstraktom-nasinnya-konopli-200-ml-1-flakon',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Arbor Vitae Hemp Гель для душу з екстрактом насіння коноплі 200 мл 1 флакон',
                    'name_en' => 'Arbor Vitae Hemp Shower Gel with Hemp Seed Extract 200 ml 1 vial',
                ),
            6 =>
                array(
                    'id' => 24,
                    'category_id' => 5,
                    'code' => 'manorm-coral-antyseptyk-dlya-ruk-sprey-ridyna-50-ml-1-flakon',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Manorm Coral Антисептик для рук (спрей) рідина 50 мл 1 флакон',
                    'name_en' => 'Manorm Coral Antiseptic for hands (spray) liquid of 50 ml 1 bottle',
                ),
            7 =>
                array(
                    'id' => 25,
                    'category_id' => 5,
                    'code' => 'kleenex-khustynky-nosovi-z-balzamom-80-sht',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Kleenex Хустинки носові з бальзамом 80 шт',
                    'name_en' => 'Kleenex Handkerchiefs with balm 80 pcs',
                ),
            8 =>
                array(
                    'id' => 26,
                    'category_id' => 5,
                    'code' => 'gillette-blue-simple-3-brytvy-odnorazovi-4-sht',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Gillette Blue Simple 3 Бритви одноразові 4 шт',
                    'name_en' => 'Gillette Blue Simple 3 Disposable razors 4 pcs',
                ),
            9 =>
                array(
                    'id' => 27,
                    'category_id' => 5,
                    'code' => 'zhelana-sil-dlya-van-morska-naturalna-1-kh-1-paket',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Желана Сіль для ван морська натуральна 1 кг 1 пакет',
                    'name_en' => 'Desired Salt for baths sea natural 1 kg 1 package',
                ),
            10 =>
                array(
                    'id' => 28,
                    'category_id' => 6,
                    'code' => 'aromatyka-aromakompozytsiya-efirnykh-oliy-zaspokoyuyucha-10-ml-1-flakon',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Ароматика Аромакомпозиція ефірних олій Заспокоююча 10 мл 1 флакон',
                    'name_en' => 'Aromatics Aromatic composition of essential oils Soothing 10 ml 1 bottle',
                ),
            11 =>
                array(
                    'id' => 29,
                    'category_id' => 6,
                    'code' => 'zelena-apteka-balzam-maska-proty-vypadinnya-volossya-300-ml-1-flakon',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Зелена Аптека Бальзам-маска проти випадіння волосся 300 мл 1 флакон',
                    'name_en' => 'Green Pharmacy Balm-mask against hair loss 300 ml 1 vial',
                ),
            12 =>
                array(
                    'id' => 30,
                    'category_id' => 6,
                    'code' => 'doliva-balzam-dlya-shkiry-navkolo-ochey-15-ml-1-banka',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Doliva Бальзам для шкіри навколо очей 15 мл 1 банка',
                    'name_en' => 'Doliva Eye Balm 15 ml 1 jar',
                ),
            13 =>
                array(
                    'id' => 31,
                    'category_id' => 6,
                    'code' => 'aflokrem-emolient-dlya-osoblyvo-chutlyvoi-shkiry-50-h-1-tuba',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Афлокрем емолієнт для особливо чутливої шкіри 50 г 1 туба',
                    'name_en' => 'Aflokrem emollient for particularly sensitive skin 50 g 1 tube',
                ),
            14 =>
                array(
                    'id' => 32,
                    'category_id' => 6,
                    'code' => 'weleda-dezodorant-dlya-cholovikiv-roll-on-24-hodyny-50-ml-1-flakon',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Weleda Дезодорант для чоловіків Roll-On 24 години 50 мл 1 флакон',
                    'name_en' => 'Weleda Deodorant for men Roll-On 24 hours 50 ml 1 bottle',
                ),
            15 =>
                array(
                    'id' => 33,
                    'category_id' => 7,
                    'code' => 'alkom-3001-bandazh-fiksuyuchyy-dlya-homilkovostopnoho-suhlobu-bavovnyanyy-rozmir-4-1-sht',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Алком 3001 Бандаж фіксуючий для гомілковостопного суглобу бавовняний розмір 4 1 шт',
                    'name_en' => 'Alcom 3001 Bandage fixing for an ankle joint cotton size 4 1 piece',
                ),
            16 =>
                array(
                    'id' => 34,
                    'category_id' => 7,
                    'code' => 'pharmasco-cito-test-test-systema-dlya-diahnostyky-cyfilisu-1-sht',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Pharmasco Cito Test Тест-система для діагностики cифілісу 1 шт',
                    'name_en' => 'Pharmasco Cito Test Test system for the diagnosis of syphilis 1 pc',
                ),
            17 =>
                array(
                    'id' => 35,
                    'category_id' => 7,
                    'code' => 'perlyna-bynt-marlevyy-nesterylnyy-5-m-kh-10-sm-1-sht',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Перлина Бинт марлевий нестерильний 5 м х 10 см 1 шт',
                    'name_en' => 'Pearl Gauze non-sterile gauze 5 m x 10 cm 1 pc',
                ),
            18 =>
                array(
                    'id' => 36,
                    'category_id' => 7,
                    'code' => 'kyivhuma-dzhhut-esmarkha-krovospynnyy-humovyy-1-sht',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Київгума Джгут Есмарха кровоспинний гумовий 1 шт',
                    'name_en' => 'Kievguma Esmarch\'s plait hemostatic rubber 1 piece',
                ),
            19 =>
                array(
                    'id' => 37,
                    'category_id' => 7,
                    'code' => 'maska-medychna-nesterylna-z-vushkamy-100-sht',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Маска медична нестерильна з вушками 100 шт',
                    'name_en' => 'Non-sterile medical mask with ears 100 pc',
                ),
            20 =>
                array(
                    'id' => 38,
                    'category_id' => 8,
                    'code' => 'novokain-darnytsya-rozchyn-dlya-inektsiy-0-5-2-ml-10-ampul',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Новокаїн Дарниця розчин для ін\'єкцій 0,5 % 2 мл 10 ампул',
                    'name_en' => 'Novocaine Darnitsa solution for injection 0.5% 2 ml 10 ampoules',
                ),
            21 =>
                array(
                    'id' => 39,
                    'category_id' => 8,
                    'code' => 'emsef-1000-poroshok-dlya-inektsiy-1000-mh-1-flakon',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Емсеф 1000 порошок для ін\'єкцій 1000 мг 1 флакон',
                    'name_en' => 'Emsef 1000 powder for injection 1000 mg 1 vial',
                ),
            22 =>
                array(
                    'id' => 40,
                    'category_id' => 8,
                    'code' => 'ampitsylin-poroshok-dlya-inektsiy-0-5-h-1-flakon',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Ампіцилін порошок для ін\'єкцій 0,5 г 1 флакон',
                    'name_en' => 'Ampicillin powder for injection 0.5 g 1 vial',
                ),
            23 =>
                array(
                    'id' => 41,
                    'category_id' => 8,
                    'code' => 'medakson-poroshok-dlya-inektsiy-2-h-10-flakoniv',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Медаксон порошок для ін\'єкцій 2 г 10 флаконів',
                    'name_en' => 'Medaxon powder for injection 2 g 10 vials',
                ),
            24 =>
                array(
                    'id' => 42,
                    'category_id' => 8,
                    'code' => 'velaksyn-kapsuly-150-mh-28-sht',
                    'deleted_at' => null,
                    'description' => null,
                    'description_en' => null,
                    'instruction' => null,
                    'name' => 'Велаксин капсули 150 мг 28 шт',
                    'name_en' => 'Velaxin capsules 150 mg 28 pcs',
                ),
        );

        for ($i = 0; $i < count($products); $i++) {
            $products[$i]['hit'] = !boolval(rand(0, 3));
            $products[$i]['recommend'] = rand(0, 1);
            $products[$i]['new'] = rand(0, 1);
            $products[$i]['created_at'] = Carbon::now();
            $products[$i]['updated_at'] = Carbon::now();
        }

        \DB::table('products')->insert($products);

    }
}
