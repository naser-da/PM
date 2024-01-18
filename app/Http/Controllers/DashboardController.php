<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $clients = Client::all()->count();
        $projects = Project::all()->count();

        return view('dashboard', compact('clients', 'projects'));
    }
}
