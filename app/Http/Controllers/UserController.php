<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

    public function updateRole(Request $request, User $user): \Illuminate\Http\RedirectResponse
    {
//        dd($request->user_id);
        $validatedData = $request->validate([
            'role' => 'required|in:admin,Guest,Email Marketer,Content Manager',
        ]);

        User::find($request->user_id)->syncRoles([$validatedData['role']]);

        return back()->with('success', 'User role updated successfully');

    }

}
