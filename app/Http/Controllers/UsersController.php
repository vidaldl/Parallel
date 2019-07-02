<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Users\UpdateProfileRequest;

class UsersController extends Controller
{


  public function logoutReset(){
    auth()->logout();

    return redirect('password/reset');
  }

  public function passwordRedirect() {
    return view('users.redirect');
  }


    public function index() {
      return view('users.index')->with('users', User::all());
    }

    public function makeAdmin(User $user) {
      $user->role = 'admin';

      $user->save();

      session()->flash('success', 'Se ha actualizado la funcion del usuario '.$user->username.' a Admin');

      return redirect(route('users.index'));
    }

    public function edit() {
      return view('users.edit')->with('user', auth()->user());
    }

    public function update(UpdateProfileRequest $request) {
      $user = auth()->user();

      $user->update([
        'username' => $request->username
      ]);

      session()->flash('success', 'El usuario ha sido actualizado exitosamente.');
      return redirect()->back();
    }
}
