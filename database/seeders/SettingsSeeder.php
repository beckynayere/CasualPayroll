<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('settings')->insert([
            ['type' => 'Shift', 'name' => 'Morning Shift', 'value' => json_encode(['start' => '08:00', 'end' => '12:00']), 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Shift', 'name' => 'Afternoon Shift', 'value' => json_encode(['start' => '13:00', 'end' => '17:00']), 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Shift', 'name' => 'Night Shift', 'value' => json_encode(['start' => '18:00', 'end' => '23:00']), 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Working Days
        DB::table('settings')->insert([
            ['type' => 'Working Day', 'name' => 'Monday', 'value' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Working Day', 'name' => 'Tuesday', 'value' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Working Day', 'name' => 'Wednesday', 'value' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Working Day', 'name' => 'Thursday', 'value' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Working Day', 'name' => 'Friday', 'value' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Working Day', 'name' => 'Saturday', 'value' => '0', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Working Day', 'name' => 'Sunday', 'value' => '0', 'created_at' => now(), 'updated_at' => now()],
        ]);
        DB::table('settings')->insert([
            ['type' => 'Branch', 'name' => 'Head Office', 'value' => json_encode(['address' => '123 Main St', 'contact' => '123-456-7890']), 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Branch', 'name' => 'Warehouse', 'value' => json_encode(['address' => '456 Warehouse Ave', 'contact' => '987-654-3210']), 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'Branch', 'name' => 'Garage', 'value' => json_encode(['address' => '789 Garage Rd', 'contact' => '456-789-1234']), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
