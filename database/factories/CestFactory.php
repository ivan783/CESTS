<?php

namespace Database\Factories;

use App\Models\Cest;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Level;
use App\Models\Category;
use App\Models\Price;

use Illuminate\Support\Str;

class CestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Hola mundo
        //hola-mundo

        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'subtitle' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement([Cest::BORRADOR, Cest::REVISION, Cest::PUBLICADO]),
            'slug' => Str::slug($title),
            'user_id' => 1,
            'level_id' => Level::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'price_id' => Price::all()->random()->id,
        ];
    }
}
