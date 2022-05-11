<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChangeProfileController extends Controller
{
    public function edit(User $user)
    {
        $user = \Auth::user();
        return view('auth.profile.form', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user = \Auth::user();
        $params = $request->all();
        $user->update($params);
        return redirect()->route('profile.edit',$user);
    }
}
