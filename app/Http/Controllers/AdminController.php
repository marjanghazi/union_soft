<?php
namespace App\Http\Controllers;

use App\Models\Project;

class AdminController extends Controller
{
    public function dashboard() {
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }
}
