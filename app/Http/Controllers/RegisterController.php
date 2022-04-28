<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller {
  public function create() {
    return view('register.create');
  }

  public function store() {
    $attributes = request()->validate([
      'name' => ['required', 'max:255'],
      'username' => ['required', 'max:255', 'min:3'],
      'email' => ['required', 'email', 'max:255'],
      'password' => ['required', 'min:3', 'max:255']
    ]);
    // No need to check for validation - the method does that for us

    User::create($attributes);
    return redirect('/');
  }
}
