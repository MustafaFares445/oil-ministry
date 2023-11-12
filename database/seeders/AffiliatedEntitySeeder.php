<?php

namespace Database\Seeders;

use App\Traits\FileManager;
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
            'name' =>  'المؤسسة العامة لتكرير النفط وتوزيع المشتقات النفطية',
            'img' =>  '/icon2-affilia.svg',
            'lang' => 'ar',
        ]
        );
        DB::table('affiliated_entities')->insert([
            'name' =>  'المعهد التقني للنفط والغاز في حمص',
            'img' =>  '/icon-affilia.svg',
            'lang' => 'ar',
        ]
        );
        DB::table('affiliated_entities')->insert([
            'name' =>  'المؤسسة العامة للجيولوجيا والثروة المعدنية',
            'img' =>  '/icon3-affilia.svg',
            'lang' => 'ar',
        ]
        );
    }
}
