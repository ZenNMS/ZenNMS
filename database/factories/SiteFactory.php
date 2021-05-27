<?php

namespace Database\Factories;

use App\Models\Site;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SiteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Site::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->company;

        return [
            'name' =>$name,
            'slug' => Str::slug($name),
            'site_color' => $this->faker->hexColor,
            'site_prefix' => strtoupper(substr($this->faker->word(), 0, 3)),
            'status' => $this->faker->randomNumber(1),
            'description' => null,
            'timezone' => $this->faker->timezone,
            'gps_latitude' => $this->faker->latitude,
            'gps_longitude' => $this->faker->longitude,
            'tags' => $this->faker->words(10, true),
        ];
    }
}
