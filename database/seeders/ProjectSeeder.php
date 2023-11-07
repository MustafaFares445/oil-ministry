<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'title' => 'إعادة التأهيل والصيانة في معمل حيان للغاز',
            'content' => 'أكد وزير النفط والثروة المعدنية علي غانم أن الورشات الفنية التابعة للوزارة بدأت بإعادة التأهيل والصيانة في معمل حيان للغاز وفقا للخطط الموضوعة بما يتناسب مع حجم الأضرار الناجمة عن استهداف إرهابيي تنظيم “داعش” للمعمل والتي تفوق 65 بالمئة.
            وأشار غانم خلال زيارة تفقدية الى موقع المعمل في ريف حمص الشرقي يرافقه محافظ حمص طلال البرازي وعدد من المعنيين في الوزارة إلى أنه تم وضع الخطط الإسعافيه والمتوسطة والطويلة للصيانة لافتا إلى أنه يتم حاليا عملية إطفاء الآبار التي قام بتفجيرها إرهابيو “داعش” حيث تم إطفاء بئرين والعمل جار لإطفاء باقي الآبار وربط الآبار السليمة على الشبكة الغازية.',
            'img' => '',
            'lang' => 'ar',
        ]);
    }
}
