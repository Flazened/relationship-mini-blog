<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Tampilkan semua user
    public function index()
    {
        $users = User::with('posts')->get();
        return view('users.index', compact('users'));
    }

    // Tampilkan detail user + posts + comments
    public function show(User $user)
    {
        $user->load('posts.comments');
        return view('users.show', compact('user'));
    }
}
