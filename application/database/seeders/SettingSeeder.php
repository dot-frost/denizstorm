<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $settingsData = collect(json_decode(\Storage::disk('initial-data')->get('settings.json'),JSON_OBJECT_AS_ARRAY));
        $settingsData->each(function($setting){
            Setting::create($setting);
        });
    }
}
