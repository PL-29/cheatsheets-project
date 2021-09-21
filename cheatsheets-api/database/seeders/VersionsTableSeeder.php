<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Version;

class VersionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Version::factory()
            ->count(10)
            ->create();
    }
}
