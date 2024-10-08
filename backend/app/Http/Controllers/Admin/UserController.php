<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
  public function index() {
    $users = User::latest()->get();
    return response()->json($users);
  }

  public function destroy(User $user) {
    $user->delete();
    return response()->noContent();
  }
}
