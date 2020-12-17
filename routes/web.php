<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

Route::get('/', function (Request $request) {
    $users = User::all();
    $component = $request->get('c');
    return view('welcome', compact('users', 'component'));
});
