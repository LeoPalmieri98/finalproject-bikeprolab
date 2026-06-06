<?php

namespace Database\Seeders;

use App\Models\Revision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $revisions = [
            [
                'user_name' => 'Marco Rossi',
                'user_email' => 'marco.rossi@email.it',
                'brand' => 'Fox',
                'model' => '38 Factory',
                'serial_key' => 'FOX-2024',
                'tel_number' => '987654321',
                'service_interval' => '200',
                'status' => 'Accettata',
            ],

            [
                'user_name' => 'Luca Bianchi',
                'user_email' => 'luca.b@email.it',
                'brand' => 'RockShox',
                'model' => 'Zeb Ultimate',
                'serial_key' => 'RS-ZEB-01',
                'tel_number' => '123456789',
                'service_interval' => '50',
                'status' => 'Presa in carico',
            ],
        ];

        foreach ($revisions as $item) {
            $newRevision = new Revision();
            $newRevision->user_name = $item["user_name"];
            $newRevision->user_email = $item["user_email"];
            $newRevision->brand = $item["brand"];
            $newRevision->model = $item["model"];
            $newRevision->serial_key = $item["serial_key"];
            $newRevision->tel_number = $item["tel_number"];
            $newRevision->service_interval = $item["service_interval"];
            $newRevision->status = $item["status"];
            $newRevision->save();
        }
    }
}
