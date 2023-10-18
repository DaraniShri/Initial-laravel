<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;


use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = \Validator::make(request()->all(), [
            'name' => 'required|string|min:5',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:3',
            'role_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'status' => Response::HTTP_OK,
            ], Response::HTTP_OK);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);
        $user->assignRole($request->role_id);
        return response()->json([
            'access_token' => $user->createToken('client')->plainTextToken
        ],200);
    }
}
