<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

use App\Models\Profile;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

	public function run ()
	{

		$user = User::firstOrCreate([
			'email' => 'admin@admin.tk'
		], [
			'name' => 'Admin',
			'login' => 'admin',
			'password' => Hash::make(123123123),
		]);

		$user->profile()->create();
		/*
		Profile::firstOrCreate([
			'user_id' => $user->id,
		]);
		*/

		$this->call([
			CategorySeeder::class,
			TagSeeder::class,
			PostSeeder::class,
			CommentSeeder::class
		]);

	}


}