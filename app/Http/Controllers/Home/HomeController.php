<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        try {
            if (Auth::check()) { // Check if user is authenticated
                $role = Auth::user()->role;
                if ($role == 'admin') {
                    return redirect()->route('admin.home');
                } elseif ($role == 'user') {
                    return redirect()->route('user.home');
                } elseif ($role == 'worker') {
                    return redirect()->route('worker.home');
                } else {
                    return redirect()->back();
                }
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function displayLandingPage()
    {
        return view('Landing');
    }

    public function displayDetailsForm(User $user)
    {
        try {
            return view('auth.user-details', compact('user'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', $e->getMessage());
        }
    }

    public function displayContactForm($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('User.Pages.contact-page', compact('user'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function sendContactForm(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);

            // Validate the incoming request data
            $validatedData = $request->validate([
                'about' => 'nullable|string',
                'profile_image' => 'nullable|image',
                'dob' => 'required|date',
                'gender' => 'required',
                'province' => 'nullable|string',
                'city' => 'nullable|string',
                'area' => 'nullable|string',
                // Add more validation rules as needed
            ]);

            // Handle profile image upload

            if ($request->hasFile('profile_image')) {
                $image = $request->file('profile_image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images\profile'), $image_name);
                $image_path = $image_name;
                $user->profile_image = $image_path;
            }else{
                $user->profile_image = 'default.jpg';
            }
            $user->dob = $validatedData['dob'];
            $user->gender = $validatedData['gender'];
            $user->province = $validatedData['province'];
            $user->city = $validatedData['city'];
            $user->area = $validatedData['area'];
            // Save other fields if needed

            // If user role is worker, save additional fields
            if (auth()->user()->role == 'worker') {
                $validatedWorkerData = $request->validate([
                    'working_field' => 'required|string',
                    'experience' => 'required|string',
                    'citizenship_number' => 'required|string',
                    'citizenship_front' => 'required|image',
                    'citizenship_back' => 'required|image',
                    // Add more validation rules as needed
                ]);

                if ($request->hasFile('citizenship_front')) {
                    $image = $request->file('citizenship_front');
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images\citizenship'), $image_name);
                    $image_path = $image_name;
                    $user->citizenship_front = $image_path;
                }


                if ($request->hasFile('citizenship_back')) {
                    $image = $request->file('citizenship_back');
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images\citizenship'), $image_name);
                    $image_path = $image_name;
                    $user->citizenship_back = $image_path;
                }
                $user->working_field = $validatedWorkerData['working_field'];
                $user->experience = $validatedWorkerData['experience'];
                $user->citizenship_number = $validatedWorkerData['citizenship_number'];
                // Handle citizenship front and back image upload similarly to profile image
            }

            $user->save();

            // Redirect or respond with success message as needed
            return redirect()->route('home')->with('success', 'User registered successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    
}
