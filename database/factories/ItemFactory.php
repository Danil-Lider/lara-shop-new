<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public static function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // trim
        $text = trim($text, $divider);
        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);
        // lowercase
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

    public function definition()
    {
        $name = $this->faker->name();

        return [
            'name' => $name,
            'category_id' => 1,
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'description' => $this->faker->paragraph(2),
            'price' => $this->faker->randomFloat(1, 10, 300),
            'slug' => self::slugify($name),
        ];
    }
}
