<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AffiliatedEntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('affiliated_entities')->insert([
            'name' =>    'المؤسسة العامة لتكرير النفط وتوزيع المشتقات النفطية',
            'img' =>    '',
            'lang' => 'ar',
        ]
        );
        DB::table('affiliated_entities')->insert([
            'name' =>    'المعهد التقني للنفط والغاز في حمص',
            'img' =>    '',
            'lang' => 'ar',
        ]
        );
        DB::table('affiliated_entities')->insert([
            'name' =>    'المؤسسة العامة للجيولوجيا والثروة المعدنية',
            'img' =>    '',
            'lang' => 'ar',
        ]
        );
    }
}
