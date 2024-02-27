<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'ADDRESS',
                'value' => json_encode(['Jl. Melati, Kadirojo II, Purwomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571']),
            ],
            [
                'name' => 'EMAIL',
                'value' => json_encode(['jinyoung@gmail.com']),
            ],
            [
                'name' => 'PHONE',
                'value' => json_encode(['081246835357', '08276542563']),
            ],
        ];

        foreach ($items as $item) {
            Setting::create([
                'name' => $item['name'],
                'value' => $item['value'],
            ]);
        }
    }
}
