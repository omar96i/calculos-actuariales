<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get(){
        return response()->json([
            'status' => true,
            'users' => User::get()
        ]);
    }
}
