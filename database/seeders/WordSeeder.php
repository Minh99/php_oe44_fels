<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = array(
           ['vocabulary'=>'Operation','spelling'=>'ɒpəˈreɪʃn','translate'=>'Thao tác','category_id'=>2,'lesson_id'=>1], # category_id = 2, lesson_id = 1
           ['vocabulary'=>'Data','spelling'=>'dadə,ˈdādə','translate'=>'Dữ liệu','category_id'=>1,'lesson_id'=>1],
           ['vocabulary'=>'Gateway','spelling'=>'ˈɡeɪtweɪ','translate'=>'Cổng kết nối','category_id'=>1,'lesson_id'=>1],
           ['vocabulary'=>'Storage','spelling'=>'stɔːrɪdʒ','translate'=>'Lưu trữ','category_id'=>1,'lesson_id'=>1],
           ['vocabulary'=>'database','spelling'=>'ˈdeɪtəbeɪs','translate'=>'Cơ sở dữ liệu','category_id'=>1,'lesson_id'=>1],

           ['vocabulary'=>'Install','spelling'=>'ɪnˈstɔːl','translate'=>'Cài đặt','category_id'=>2,'lesson_id'=>2], # category_id = 2, lesson_id = 2
           ['vocabulary'=>'Provide','spelling'=>'prəˈvaɪd','translate'=>'Cung cấp','category_id'=>2,'lesson_id'=>2],
           ['vocabulary'=>'Remote','spelling'=>'rɪˈməʊt','translate'=>'Từ xa','category_id'=>3,'lesson_id'=>2],
           ['vocabulary'=>'Respond','spelling'=>'rɪˈspɒnd','translate'=>'Phản hồi','category_id'=>2,'lesson_id'=>2],
           ['vocabulary'=>'Solve','spelling'=>'sɒlv','translate'=>'Giải quyết','category_id'=>2,'lesson_id'=>2],
       );
       
       DB::table('words')->insert($data);
    }
}
