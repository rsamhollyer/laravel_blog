<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller {
  public function create() {
    return view('register.create');
  }

  public function store() {
    $attributes = request()->validate([
      'name' => ['required', 'max:255'],
      'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
      'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
      'password' => ['required', 'min:3', 'max:255']
    ]);
    // No need to check for validation - the method does that for us

    // Don't need to call the mutator function that we created in the User model to hash the password.
    User::create($attributes);

    return redirect('/');
  }
}
