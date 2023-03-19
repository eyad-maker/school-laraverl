<?php

namespace Database\Seeders;
use App\Models\Specialization;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('specializations')->delete();
        $specializations = [
            ['en'=> 'Arabic', 'ar'=> 'عربي',"ru"=>"арабский"],
            ['en'=> 'Sciences', 'ar'=> 'علوم',"ru"=>"наук"],
            ['en'=> 'Computer', 'ar'=> 'حاسب الي',"ru"=>"Компьютер"],
            ['en'=> 'English', 'ar'=> 'انجليزي',"ru"=>"English"],
        ];
        foreach ($specializations as $S) {
            Specialization::create(['Name' => $S]);
        }
    }
}
