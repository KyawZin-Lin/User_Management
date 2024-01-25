<?php

namespace Database\Seeders;

use App\Models\UserMemberType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersMemberTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserMemberType::create([
            'name' => 'Normal',

        ]);

        UserMemberType::create([
            'name' => 'Gold',

        ]);
    }
}
