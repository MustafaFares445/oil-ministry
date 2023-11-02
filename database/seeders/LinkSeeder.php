<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('links')->insert([
            'name' => 'أنظمة وتشريعات',
            'link' => 'http://mopmr.gov.sy/index.php/ar/ministry-ar/aboutus-ar/regulations-legislation-ar',
            'lang' => 'ar'
        ]);
        DB::table('links')->insert([
            'name' => 'رئاسة مجلس الوزراء',
            'link' => 'http://www.pministry.gov.sy/',
            'lang' => 'ar'
        ]);
        DB::table('links')->insert([
            'name' => 'بوابة الحكومة الإلكترونية السورية',
            'link' => 'http://egov.sy/',
            'lang' => 'ar'
        ]);
        DB::table('links')->insert([
            'name' => 'وزارة التنمية الإدارية',
            'link' => 'https://moad.gov.sy/',
            'lang' => 'ar'
        ]);
    }
}
