<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function index(Request $request)
    {

        $users = User::all();

        return view('users', [
            'users' => $users
        ]);
    }

    public function books(Request $request, User $user)
    {
        return view('user-books', [ 'user' => $user, 'books' => $user->books]);
    }
}
