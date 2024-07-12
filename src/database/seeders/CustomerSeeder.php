<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timstamp = \Carbon\Carbon::now()->toDateString();
        DB::table('customers')->insert([
            'full_name' => 'Eza_Rezaa',
            'username' => 'Zaa',
            'email' => 'ezarezaa@gmail.com',
            'phone_number' => '085894101556',
            'created_at' => $timstamp,
            'updated_at' => $timstamp,
        ]);
    }
}
