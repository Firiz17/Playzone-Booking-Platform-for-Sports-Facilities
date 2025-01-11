<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('signUp');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signIn');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'username' => 'required|string|unique:users,username',
            'phone_number' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|in:customer,owner'
        ]);
        User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'username' => $validated['username'],
            'phone_number' => $validated['phone_number'],
            'email' => $validated['email'],
            'password' =>$validated['password'], // Password hashing
            'role' => $validated['role'],
        ]);
        return redirect()->route('login.create')->with('success', 'Registration successful! Please login.');

    }
    public function login(Request $request) {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {

            $user = Auth::user();

           if ($user->role === 'customer') {

               return redirect()->route('review.create');
            } elseif ($user->role === 'owner') {

                return redirect()->route('review.create');
            }


            return redirect()->route('signUp,create');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
