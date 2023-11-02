<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name' => 'إطلاق خدمة البطاقة الذكية',
            'lang' => 'ar',
        ]);
        DB::table('services')->insert([
            'name' => 'بيع الخرائط الجيولوجية المرقمنة',
            'lang' => 'ar',
        ]);
        DB::table('services')->insert([
            'name' => 'بيع الفوسفات لشراكات داخلية',
            'lang' => 'ar',
        ]);
        DB::table('services')->insert([
            'name' => 'إصدار وتصديق الوثائق الثانوية المهنية والنفطية',
            'lang' => 'ar',
        ]);
        DB::table('services')->insert([
            'name' => 'دليل محطات الوقود',
            'lang' => 'ar',
        ]);
    }
}
