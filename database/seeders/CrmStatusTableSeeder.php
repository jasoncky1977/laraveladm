<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2024-02-23 08:22:12',
                'updated_at' => '2024-02-23 08:22:12',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2024-02-23 08:22:12',
                'updated_at' => '2024-02-23 08:22:12',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2024-02-23 08:22:12',
                'updated_at' => '2024-02-23 08:22:12',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}