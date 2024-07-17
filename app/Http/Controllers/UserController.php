<?php

namespace App\Http\Controllers;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{

	public function store()
	{
		$data = $this->getData();
		$user = User::create($data);
		return $user;
	}

	public function index ()
	{
		//return User::all();
		return UserResource::collection(User::all())->resolve();
	}

	public function show (User $user)
	{
		//return $user;
		return UserResource::make($user)->resolve();
	}

	public function update (User $user)
	{
		$user->update([
			'name' => $user->name.' edited'
		]);
		return Response::HTTP_NO_CONTENT;
	}

	public function destroy (User $user)
	{
		$user->delete();
		return Response::HTTP_NO_CONTENT;
	}

	private function getData ()
	{
		$arNames1 = ['Ivan', 'John', 'Juan', 'Johann'];
		$arNames2 = ['Ivanov', 'Lennon', 'Iglesias', 'Muller'];

		$randomKeys1 = array_rand($arNames1);
		$randomKeys2 = array_rand($arNames2);

		$login = 'user_'.rand(12, 121212);

		return [
			'name' => $arNames1[$randomKeys1].' '.$arNames2[$randomKeys2],
			'email' => $login.'@mail.local',
			'password' => md5($login.'_password'),
			'login' => $login
		];

	}

}