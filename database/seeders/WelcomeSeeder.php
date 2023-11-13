<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WelcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('welcomes')->insert([
            'title' => 'كلمة السيد الوزير لزوار الموقع',
            'content' => 'السيدات والسادة زوار موقع وزارة النفط والثروات المعدنية الأعزاء
            يسعدني أن أرحب بكم في موقع الوزارة هذا وأتمنى أن تجدوه يفي بالحد الأدنى من احتياجاتكم من المعلومات التي ترغب في الحصول عليها أو العثور عليها في مجال عمل أنشطة المؤسسات.
            قامت شركات الوزارة بتسهيل إدارة الموقع لاستقبال تعليقاتكم ومقترحاتكم بهدف إضافة قيمة جديدة للموقع، كما أن هذا الموقع منصة للتواصل وتبادل الأفكار والمعلومات.',
            'person' => 'وزارة البترول والثروة المعدنية
            المهندس بسام رضوان طعمة',
            'industry' => 'وزير البترول والثروة المعدنية',
            'img' => '/minister.svg',
            'lang' => 'ar',
        ]);
    }
}
