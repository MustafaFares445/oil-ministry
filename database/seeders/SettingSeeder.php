<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'header_image' =>  '/background-header.svg',
            'header_big' =>    'عالم جديد من أحدث الآليات في مجال النفط',
            'header_small'=>    'بفضل جهود كوادرنا المبدعة والحثيثة من العمال والمهندسين لتحقيق عمل وإنتاج أفضل لمستقبل واعد',
            'about' => 'أحدثت وزارة النفط والثروة المعدنية بموجب المرسوم التشريعي رقم 139 تاريخ 1966-10-26 المعدل بالمرسوم التشريعي رقم 121 تاريخ 19/5/1970 باسم " وزارة النفط والكهرباء وتنفيذ المشارع الصناعية " أولا ، ثم "وزارة النفط والكهرباء والثروة المعدنية " ثانيا، ثم عدلت تسميتها إلى " وزارة النفط والثروة المعدنية " بموجب المرسوم التشريعي رقم 94 تاريخ 1974-9-23',
            'lang' => 'ar',
        ]
        );
    }
}
