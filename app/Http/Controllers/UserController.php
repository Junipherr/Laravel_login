<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);
    
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
    
        return redirect()->route('dashboard')->with('success', 'User updated successfully');
    }
    

    // Add this method
    public function dashboard()
    {
        // Fetch users or any other data you want to display on the dashboard
        $users = User::all(); // Example of fetching all users
        return view('dashboard', compact('users')); // Return the dashboard view with users data
    }
}
