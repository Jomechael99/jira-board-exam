<?php

namespace Database\Seeders;

use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $status[] =[
            'name' => 'Backlog',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $status[] =[
            'name' => 'In progress',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $status[] =[
            'name' => 'Done',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        Status::insert($status);
    }
}
