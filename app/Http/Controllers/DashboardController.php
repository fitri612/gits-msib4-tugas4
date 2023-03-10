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

    // edit fungsi untuk menampilkan form edit
    public function edit($id_mentor)
    {
        $mentor = Mentor::findOrFail($id_mentor);
        return view('pages.dashboard', compact('mentor'));
    }

    // update fungsi untuk mengupdate data
    public function update(Request $request, $id_mentor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);

        $mentor = Mentor::findOrFail($id_mentor);
        $mentor->name = $request->input('name');
        $mentor->role = $request->input('role');
        $mentor->save();

        return redirect()->route('mentors.index')->with('success', 'Mentor updated successfully');
    }

}
