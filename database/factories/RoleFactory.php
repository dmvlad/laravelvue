<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
		$roles = ['admin', 'moderator', 'author', 'user'];

		return [
			'title' => fake()->unique()->randomElement($roles)
		];


		/*

		return [
			'title' => $roles
		];

		$roles = array(
			array('id' => '1', 'title' => 'admin'),
			array('id' => '2', 'name' => 'moderator'),
			array('id' => '3', 'name' => 'author'),
			array('id' => '4', 'name' => 'user'),
		);

		foreach ($roles as $role) {
			Role::create([
				'id' => $role['id'],
				'title' => $role['title']
			]);
		}
		*/
    }
}