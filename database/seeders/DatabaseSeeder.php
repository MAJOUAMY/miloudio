<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Question;
use App\Models\Response;
use App\Models\Review;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'MILOUD AJOUAMY',
            'email' => 'test@example.com',
            'work_email' => 'ajouamymiloud@gmail.com',
            "phone" => "+212600823493",
            "experience_years" => 1,


        ]);

        Experience::create([
            "company" => "google",
            "company_logo" => "test/dldùldxlf",
            "function" => "web developer",
            "start_year" => 2023,
            "end_year" => 2023,

            "user_id" => 1
        ]);
        Experience::create([
            "company" => "facebook",
            "company_logo" => "test/dldùldxlf",
            "function" => "web developer",
            "start_year" => 2024,
            "end_year" => 2029,

            "user_id" => 1
        ]);
        Category::factory(10)->create();

        Blog::factory(10)->create();

        Project::factory(10)->create();
        Certificate::factory(5)->create();
        Service::factory(20)->create();

        Question::factory(10)->create();
        for ($i = 1; $i <= 10; $i++) {
            Response::create([
                "content" => "response for question" . $i,
                "question_id" => $i
            ]);
        }

        Review::factory(10)->create();
    }
}
