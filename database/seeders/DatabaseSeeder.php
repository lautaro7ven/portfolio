<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Skill;
use App\Models\Educacion;
use App\Models\AboutMe;
use App\Models\Contact;
use App\Models\FeaturedProyects;
use App\Models\WorkExperience;
use App\Models\Posts;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(6)->create();
         Skill::factory(18)->create();
         Educacion::factory(15)->create();
         AboutMe::factory(20)->create();
         FeaturedProyects::factory(15)->create();
         Workexperience::factory(15)->create();
         Posts::factory(15)->create();
         Contact::factory(12)->create();

    }
}
