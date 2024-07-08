<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Category;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $totalEnquiries = Enquiry::count();

        // Get pending enquiries count
        $pendingEnquiries = Enquiry::where('status', 'pending')->count();

        // Get seen enquiries count (assuming 'seen' is where 'pending' is false)
        $seenEnquiries = Enquiry::whereNot('status', 'pending')->count();

        // Get today's enquiries count
        $todaysEnquiries = Enquiry::whereDate('created_at', Carbon::today())->count();

        return view('admin/home', compact('totalEnquiries', 'pendingEnquiries', 'seenEnquiries', 'todaysEnquiries'));
    }
    public function index2()
    {
        return view('admin/login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('AuthToken')->plainTextToken;

            return to_route('admin/dashboard');
        } else {
            $request->session()->put('error', 'Invalid Credentials');
            return to_route('login');
        }
    }


    public function signup(Request $request)
    {


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return response()->json(['message' => 'User created successfully', 'user' => $user]);
    }

    public function enquiries()
    {
        $enquiries = Enquiry::get();
        return view('admin/enquiries', ['enquiries' => $enquiries]);
    }

    public function categories()
    {
        $categories = Category::get();
        return view('admin/categories', ['categories' => $categories]);
    }

    public function logout(Request $request)
    {
        
        // You can clear other session data if needed
        $request->session()->invalidate();
        
        // Optionally, flash a message indicating successful logout
    
        return redirect()->route('login');
    }
}
