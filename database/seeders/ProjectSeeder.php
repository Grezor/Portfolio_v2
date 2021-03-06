<?php

namespace Database\Seeders;

use App\Models\CategoryProject;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory()
            ->count(20)
            ->has(CategoryProject::factory()->count(5), 'categoryproject')
            ->create();
    }
}
