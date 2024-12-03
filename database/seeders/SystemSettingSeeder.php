<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SystemSetting;

class SystemSettingSeeder extends Seeder
{
    /*
    *Run the Database seeds.
    */
    public function run():void
    {
        SystemSetting::create([
            'company_name' =>'asd construction',
            'email'=> 'saranya101105@gmail.com',
            'website' => 'www.saranya.com',
            'customer_care_no' => '12345'
        ]);
    }
}