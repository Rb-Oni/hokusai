<?php

namespace Database\Seeders;

use App\Models\Genre;
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
                'date' => '2016-04-14',
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
                'weight' => '200',
                'size' => '12.1 x 1.7 x 17.8',
                'title' => 'Boku no Hero Academia / 僕のヒーローアカデミア',
                'origin' => 'Japon',
                'fv_volumes_number' => '28',
                'ov_volumes_number' => '30',
                'genres' => [
                    '1',
                    '2'
                ]
            ],
            [
                'img' => 'berserk.jpg',
                'name' => 'Berserk',
                'category_id' => '2',
                'volume' => '1',
                'author' => 'Kentaro Miura',
                'date' => '2004-10-06',
                'fv_editor' => 'Glénat',
                'ov_editor' => 'Hakusensha',
                'paperback_price' => '6.99',
                'digital_price' => '4.99',
                'quantity' => '20',
                'synopsis' => "Guts, le guerrier noir, promène son imposante silhouette de routes en villages. Sur son passage, les cadavres s'amoncellent et il laisse derrière lui des torrents de sang. Le corps vêtu de noir, il porte sur son dos une épée aussi haute qu'un homme. Sur son cou, une marque mystérieuse le condamne à être poursuivi jour et nuit par des démons. Puck, l'elfe facétieux, croise un jour le chemin de cette machine à tuer. Quelles horreurs a-t-il pu connaître pour être animé d'une telle soif de vengeance ? Alors que le monde sombre inextricablement dans le chaos, Guts règle ses comptes avec les forces démoniaques qui resserrent leur emprise sur la destinée des hommes. Une époque s'achève... Au fil des années, « Berserk » est devenu au Japon u n classique de l'heroic fantasy. Kentarô Miura y déploie ses talents de scénariste et son imagination débordante. La série abonde de scènes d'anthologies et baigne dans une violence implacable : pas étonnant que « Berserk » soit devenu une référence pour les amoureux de Tolkien et de jeux de rôles. En France, la série a déjà ses fans, qui voient leur attente récompensée : la série est publiée en sens de lecture et format original, et les 7 premiers volumes sont prévus pour paraître mensuellement. L'un des mangas les plus attendus de l'année !",
                'language' => 'Français',
                'isbn10' => '2723448126',
                'isbn30' => '978-2723448123',
                'pages' => '224',
                'weight' => '299',
                'size' => '13 x 1.8 x 18',
                'title' => 'Berserk / ベルセルク',
                'origin' => 'Japon',
                'fv_volumes_number' => '41',
                'ov_volumes_number' => '41',
                'genres' => [
                    '1',
                    '2'
                ]
            ],
        ];

        foreach ($products as $product) {
            try {
                $tmp_product = Product::firstOrCreate([
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
                $tmp_product->genres()->attach(Genre::find($product['genres']));
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
