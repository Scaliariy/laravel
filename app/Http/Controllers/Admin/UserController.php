<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(7);
        return view('auth.users.index', compact('users'));
    }

    public function create()
    {
//        $users = User::get();
//        return view('auth.users.form', compact('users'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        return view('auth.users.show', compact('user'));
    }

    public function edit($id)
    {
        //
    }

    public function orders(User $user)
    {
        $orders = $user->orders()->paginate(10);
        return view('auth.users.orders', compact('orders'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
