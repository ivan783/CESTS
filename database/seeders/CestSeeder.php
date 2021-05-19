<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\Cest;
use App\Models\Description;
use App\Models\Goal;
use App\Models\Image;
use App\Models\Lesson;
use App\Models\Requirement;
use App\Models\Section;
use Illuminate\Database\Seeder;

class CestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cests = Cest::factory(40)->create();

        foreach ($cests as $cest) {
            Image::factory(1)->create([
                'imageable_id' => $cest->id,
                'imageable_type' => 'App\Models\Cest'
            ]);

            Requirement::factory(4)->create([
                'cest_id' => $cest->id
            ]);

            Goal::factory(4)->create([
                'cest_id' => $cest->id
            ]);

            Audience::factory(4)->create([
                'cest_id' => $cest->id
            ]);

            $sections = Section::factory(4)->create(['cest_id' => $cest->id]);

            foreach ($sections as $section) {
                $lessons = Lesson::factory(4)->create(['section_id' => $section->id]);

                foreach ($lessons as $lesson) {
                    Description::factory(1)->create(['lesson_id' => $lesson->id]);
                }
            }
        }
    }
}
