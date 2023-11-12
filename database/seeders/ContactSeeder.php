<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'email' =>    'info@mopmr.gov.sy',
            'phone' =>    '+963-11-3137930',
            'location'=>    'سوريا - دمشق - مشروع دمر',
            'lang' => 'ar',
        ]
        );
    }
}
