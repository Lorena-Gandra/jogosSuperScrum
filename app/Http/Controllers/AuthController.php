<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('login')->with('success', 'Registration successful');
    }

    
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('menu');
        }

        return back()->withErrors(['message' => 'Invalid credentials']);
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }


    public function menu()
    {
        return view('menu'); 
    }

}
