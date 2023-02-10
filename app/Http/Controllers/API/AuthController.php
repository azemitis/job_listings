<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use HttpResponses;

    public function login() {
        return "this is my login method";
    }

    public function register() {
        return response()->json('This is my register method');
    }

    public function logout() {
        return response()->json('This is logout');
    }
    
    // public function register(Request $request) {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required',
    //         'c_password' => 'required|same:password',
    //     ]);

    //     if ($validator->fails()) {
    //         $response = [
    //             'success' => false,
    //             'message' => $validator->errors()
    //         ];
    //         return response()->json($response, 400);
    //     }

    //     $input = $request->all();
    //     $input['password'] = bcrypt($input['password']);
    //     $user = User::create($input);

    //     $success['token'] = $user->createToken('MyApp')->plainTextToken;
    //     $success['name'] = $user->name;

    //     $response = [
    //         'success' =>true,
    //         'data' => $success,
    //         'message' => "User register sucessfuly"
    //     ];

    //     return response()->json($response, 200);
    // }

    // public function login(Request $request) {
    //     if (Auth::attempt(['email' => $request->email, 'password'=>$request->password])) {
    //         // $user = Auth::user();
    //         $user = $request->user();
    //         $success['token'] = $user->createToken('MyApp')->plainTextToken;
    //         $success['name'] = $user->name;
    
    //         $response = [
    //             'success' =>true,
    //             'data' => $success,
    //             'message' => "USer register sucessfuly"
    //         ];
    
    //         return response()->json($response, 200);
    //     }
    // }
}
