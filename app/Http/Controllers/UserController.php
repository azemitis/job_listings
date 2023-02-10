<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        // Keeps search results
        if ($request->has('search')) {
            return $this->search($request);
        }
        
        // Shows admins on top of the page
        $users = User::orderBy('role', 'desc')->paginate(7);
        return view('users.index', compact('users'));
    }

    // Not yet implemented method for creating new user
    // public function store(Request $request, User $user)
    // {
    //     $user->update(['role' => $request->role]);
    //     return redirect()->route('users.index')->with('success', 'User role updated successfully.');
    // }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update(['role' => $request->role]);

        // check if search parameter is present
        if ($request->has('search')) {
            // redirects back to search results with search term
            return redirect()->route('users.search', ['search' => $request->get('search')])->with('success', 'User role updated successfully.');
        } else {
            // redirects back to users index
            return redirect()->route('users.index')->with('success', 'User role updated successfully.');
        }
    }


    public function destroy($id, Request $request)
    {
        $user = User::find($id);
        $user->delete();
    
        // check if search parameter is present
        if ($request->has('search')) {
            // redirect back to search results with search term
            return redirect()->route('users.search', ['search' => $request->get('search')])->with('success', 'User deleted successfully.');
        } else {
            // redirect back to users index
            return redirect()->route('users.index')->with('success', 'User deleted successfully.');
        }
    }
    

    /** Search box using name and email */
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $users = User::where('name', 'like', '%' . $searchTerm . '%')
            ->orWhere('email', 'like', '%' . $searchTerm . '%')
            ->paginate(6);
        return view('users.index', compact('users', 'searchTerm'));
    }
}
