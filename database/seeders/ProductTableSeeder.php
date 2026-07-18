<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // 1. Forcella Fox 38
            [
                'category_id' => 1, // Forcelle
                'brand' => 'Fox',
                'name' => '38 Float Factory 160mm 29" Conica Grip2',
                'price' => 1200.00,
                'size' => '160mm',
                'wheel' => '29"',
                'material' => 'Alluminio / Magnesio',
                'color' => 'Kashima (Oro/Arancione)',
                'brakes' => 'Disco (Post Mount)',
                'description' => 'Forcella top di gamma Fox 38 Float Factory con cartuccia Grip2, regolazioni HSC/LSC e HSR/LSR. Ideale per Enduro.',
                'image' => 'uploads/fox38-float.webp',
            ],
            // 2. Forcella Lyrik Select
            [
                'category_id' => 1, // Forcelle
                'brand' => 'RockShox',
                'name' => 'Lyrik Select Charger RC D1 29" 160mm',
                'price' => 650.00,
                'size' => '160mm',
                'wheel' => '29"',
                'material' => 'Alluminio',
                'color' => 'Nero',
                'brakes' => 'Disco (Post Mount)',
                'description' => 'Forcella ammortizzata RockShox Lyrik Select dotata di cartuccia idraulica Charger RC D1. Ottimo rapporto qualità-prezzo.',
                'image' => 'uploads/LyrikSelectCharger.webp',
            ],
            // 3. Forcella Lyrik Ultimate
            [
                'category_id' => 1, // Forcelle
                'brand' => 'RockShox',
                'name' => 'Lyrik Ultimate Charger 3.1 rc2 29" Boost',
                'price' => 950.00,
                'size' => '140mm',
                'wheel' => '29"',
                'material' => 'Alluminio',
                'color' => 'Nero lucido',
                'brakes' => 'Disco (Post Mount)',
                'description' => 'La forcella definitiva per il trail/all-mountain. Perno Boost 15x110, off-set 44mm e la precisissima cartuccia Charger 3.1 RC2.',
                'image' => 'uploads/LyrikUltimateharger.webp',
            ],
            // 4. Ammortizzatore Öhlins a molla
            [
                'category_id' => 2, // Ammortizzatori
                'brand' => 'Öhlins',
                'name' => 'Kit ammortizzatore ebike TTX22M.2 Coil Trunnion',
                'price' => 850.00,
                'size' => '205x60mm',
                'wheel' => 'N/D',
                'material' => 'Alluminio / Acciaio (Molla)',
                'color' => 'Giallo Öhlins / Nero',
                'brakes' => 'N/D',
                'description' => 'Ammortizzatore a molla Öhlins TTX22M.2 specifico per e-bike. Attacco Trunnion Side-by-Side per la massima sensibilità e tenuta in discesa.',
                'image' => 'uploads/ebikeTTX22M.webp',
            ],
            // 5. Ammortizzatore Fox Float X2
            [
                'category_id' => 2, // Ammortizzatori
                'brand' => 'Fox',
                'name' => 'Float X2 Factory 2Pos-Adj Metrico',
                'price' => 790.00,
                'size' => '210x50mm',
                'wheel' => 'N/D',
                'material' => 'Alluminio',
                'color' => 'Kashima / Nero',
                'brakes' => 'N/D',
                'description' => 'Ammortizzatore ad aria Fox Float X2 Factory. Misura metrica 210x50 con regolazione a 2 posizioni, perfetto per le discese più tecniche.',
                'image' => 'uploads/FloatX2.webp',
            ],
            // 6. Ammortizzatore RockShox Deluxe Nude
            [
                'category_id' => 2, // Ammortizzatori
                'brand' => 'RockShox',
                'name' => 'Deluxe Nude RLC3 B1 DA OutPul 2Tk',
                'price' => 450.00,
                'size' => 'Standard',
                'wheel' => 'N/D',
                'material' => 'Alluminio',
                'color' => 'Nero',
                'brakes' => 'N/D',
                'description' => 'Ammortizzatore RockShox Deluxe Nude RLC3, leggero e affidabile, ideale per chi cerca prestazioni fluide con un sistema ad aria.',
                'image' => 'uploads/DeluxeNude.webp',
            ]
        ];

        foreach ($products as $item) {

            $newProduct = new Product();
            $newProduct->category_id = $item["category_id"];
            $newProduct->brand = $item["brand"];
            $newProduct->name = $item["name"];
            $newProduct->price = $item["price"];
            $newProduct->size = $item["size"];
            $newProduct->wheel = $item["wheel"];
            $newProduct->material = $item["material"];
            $newProduct->color = $item["color"];
            $newProduct->brakes = $item["brakes"];
            $newProduct->description = $item["description"];
            $newProduct->image = $item["image"];
            $newProduct->save();
        }
    }
}
