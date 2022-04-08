<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'img' => 'mhaprod.jpg',
                'name' => 'My Hero Academia',
                'category_id' => '1',
                'volume' => '1',
                'author' => 'Kohei Horikoshi',
                'date' => '2022-04-13',
                'fv_editor' => 'Ki-oon',
                'ov_editor' => 'Shueisha',
                'paperback_price' => '6.99',
                'digital_price' => '4.99',
                'quantity' => '20',
                'synopsis' => "Dans un monde où 80% de la population possède un super‑pouvoir appelé alter, les héros font partie de la vie quotidienne. Et les super‑vilains aussi ! Face à eux se dresse l'invincible All Might, le plus puissant des héros ! Le jeune Izuku Midoriya en est un fan absolu. Il n'a qu'un rêve : entrer à la Hero Academia pour suivre les traces de son idole. Le problème, c'est qu'il fait partie des 20 % qui n'ont aucun pouvoir... Son destin est bouleversé le jour où sa route croise celle d'All Might en personne ! Ce dernier lui offre une chance inespérée de voir son rêve se réaliser. Pour Izuku, le parcours du combattant ne fait que commencer !",
                'language' => 'Français',
                'isbn10' => '235592483',
                'isbn30' => '978-2355929489',
                'pages' => '196',
                'weight' => '80',
                'size' => '11.7 x 1.7 x 17.7',
                'title' => 'Boku no Hero Academia / 僕のヒーローアカデミア',
                'origin' => 'Japon',
                'fv_volumes_number' => '28',
                'ov_volumes_number' => '30'
            ],
        ];

        foreach ($products as $product) {
            try {
                Product::firstOrCreate([
                    'img' => $product['img'],
                    'name' => $product['name'],
                    'category_id' => $product['category_id'],
                    'volume' => $product['volume'],
                    'author' => $product['author'],
                    'date' => $product['date'],
                    'fv_editor' => $product['fv_editor'],
                    'ov_editor' => $product['ov_editor'],
                    'paperback_price' => $product['paperback_price'],
                    'digital_price' => $product['digital_price'],
                    'quantity' => $product['quantity'],
                    'synopsis' => $product['synopsis'],
                    'language' => $product['language'],
                    'isbn10' => $product['isbn10'],
                    'isbn30' => $product['isbn30'],
                    'pages' => $product['pages'],
                    'weight' => $product['weight'],
                    'size' => $product['size'],
                    'title' => $product['title'],
                    'origin' => $product['origin'],
                    'fv_volumes_number' => $product['fv_volumes_number'],
                    'ov_volumes_number' => $product['ov_volumes_number']
                ]);
            } catch (\Exception $exception) {
                if ($exception->getCode() == "23000") {
                    dump('Product "' . $product['name'] . '" already exist');
                } else {
                    dump($exception->getMessage());
                }
            }
        }
    }
}
