<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = uniqid().'.jpg';
        $file = UploadedFile::fake()->image($name, 300, 300)->size(2048);
        $file->storeAs('public',$name, 'local');

        return [
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => fake()->bothify('??#????#??#?'),
            'remember_token' => Str::random(10),
            'patronymic' => fake()->firstName() . 'ович',
            'phone_number' => fake()->numerify('8 ### ###-##-##'),
            'login' => fake()->lexify("????????????????????????"),
            'photo_path' => $name,
            'born_at' => fake()->date()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
