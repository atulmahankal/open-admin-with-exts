<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Config;
// use Illuminate\Support\Facades\DB;
use OpenAdmin\Admin\Auth\Database\AdminTablesSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userModel = config('admin.database.users_model');
    
        if ($userModel::count() == 0) {
            // Call the seeder class directly
            $this->call(AdminTablesSeeder::class);
        }
    }
}
