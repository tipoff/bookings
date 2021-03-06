<?php

declare(strict_types=1);

namespace Tipoff\Bookings\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tipoff\Bookings\Models\Rate;

class RateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = ['public', 'private'];

        return [
            'slug'                  => $this->faker->slug,
            'name'                  => $this->faker->name,
            'amount'                => $this->faker->numberBetween(1, 9999),
            'rate_type'             => $types[array_rand($types)],
            'participants_limit'    => $this->faker->numberBetween(1, 100),
            'rate_category_id'      => randomOrCreate(app('rate_category')),
            'creator_id'            => randomOrCreate(app('user')),
            'updater_id'            => randomOrCreate(app('user')),
        ];
    }
}
