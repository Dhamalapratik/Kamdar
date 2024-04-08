<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request, $term )
    {
        try {


            // Extract the search term from the request
            $searchTerm = $term;

            // Perform your logic based on the search term
            // For example, you can query the database to find results matching the search term
            $users = User::where('name', 'like', '%' . $searchTerm . '%')->get();

            // Return the results or perform any other action based on your requirements
            return view('User.Pages.search.search-name', ['users' => $users, 'searchTerm' => $searchTerm]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function placeSearch($term)
    {
        try {
            // Extract the search term from the request
            $searchTerm = $term;

            // Perform your logic based on the search term
            // For example, you can query the database to find results matching the search term
            $users = User::where('province', 'like', '%' . $searchTerm . '%')
                ->orWhere('city', 'like', '%' . $searchTerm . '%')
                ->orWhere('area', 'like', '%' . $searchTerm . '%')
                ->get();

            // Return the results or perform any other action based on your requirements
            return view('User.Pages.search.search-place', ['users' => $users, 'searchTerm' => $searchTerm]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function fieldSearch($term)
    {
        try {

            // Extract the search term from the request
            $searchTerm = $term;

            // Perform your logic based on the search term
            // For example, you can query the database to find results matching the search term
            $users = User::where('working_field', 'like', '%' . $searchTerm . '%')->get();

            // Return the results or perform any other action based on your requirements
            return view('User.Pages.search.search-profession', ['users' => $users, 'searchTerm' => $searchTerm]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function fieldFirst()
    {
        try {
            $users = User::where('role', 'worker')->where('experience', '<', 5)->get();
            return view('User.Pages.filter.0-5-page', compact('users'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function fieldSecond()
    {
        try {
            $users = User::where('role', 'worker')->where('experience', '>=', 5)->where('experience', '<', 10)->get();
            return view('User.Pages.filter.5-10-page', compact('users'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function fieldThird()
    {
        try {
            $users = User::where('role', 'worker')->where('experience', '>=', 10)->get();
            return view('User.Pages.filter.10+page', compact('users'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
