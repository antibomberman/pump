<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function show(User $user)
    {

        return view('admin.user.show', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserStoreRequest $request)
    {
        $user = User::create($request->validated());

        return redirect()->route('admin.user.show', $user->id);
    }

    public function edit(User $user)
    {
        return view('admin.user.edit');
    }

    public function update(UserUpdateRequest $request, User $user)
    {

        $user->update($request->validated());

        return redirect()->route('admin.user.show', $user->id);
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect()->route('admin.user.index');

    }

}
