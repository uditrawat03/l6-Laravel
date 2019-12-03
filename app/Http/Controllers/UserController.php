<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $username = $request->credentials['username'];
        $password = $request->credentials['password'];

        if (Auth::attempt(['email' => $username, 'password' => $password])) {
            $user = Auth::user();
            $response = response()->json(["user" => ['token' => $user->createToken(env('CREATE_TOKEN'))->accessToken]]);
        } else {
            $response = response()->json(['error' => 'Unauthorized'], 401);
        }

        return $response;
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $data['uuid']  = (string) Str::uuid();

        $user = User::create($data);

        return response()->json(["user" => ['token' => $user->createToken(env('CREATE_TOKEN'))->accessToken]]);
    }


    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        $request->user()->token()->delete();

        $json = [
            'msg' => true,
            'statusCode' => 200,
            'trace' => 'You are Logged out.',
        ];
        return response()->json($json, '200');
    }
}
