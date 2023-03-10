<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mentor;

class DashboardController extends Controller
{
    public function index()
    {
        $mentors = Mentor::all();
        return view('pages.dashboard', compact('mentors'));
        // return view('pages.dashboard');

    }
    public function create()
    {
        return view('pages.dashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);

        $mentor = new Mentor;
        $mentor->name = $request->input('name');
        $mentor->role = $request->input('role');
        $mentor->save();

        return redirect()->route('mentors.index')->with('success', 'Mentor added successfully');
    }

    public function destroy($id_mentor)
    {
        $mentor = Mentor::findOrFail($id_mentor);
        $mentor->delete();

        return redirect()->route('mentors.index')->with('success', 'Mentor deleted successfully');
    }
}
