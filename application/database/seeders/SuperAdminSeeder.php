<?php

namespace Database\Seeders;

use App\Models\User;
use File;
use Illuminate\Database\Seeder;
use Storage;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disk = Storage::disk('public');

        if (!$disk->exists('users')) {
            $disk->makeDirectory('users');
        }

        $avatar = 'users/supper_admin.png';

        File::copy(public_path('logo.png'),$disk->path($avatar));

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'avatar' => $avatar,
            'password' => bcrypt('adminadmin'),
        ]);
    }
}
