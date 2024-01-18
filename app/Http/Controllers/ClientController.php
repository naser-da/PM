<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $action_icons = [
            "icon:pencil | click:redirect('/user/{id}')",
            "icon:trash | color:red | click:redirect('/user/{id}')",
        ];

        $clients = Client::all();

        return view('clients.index', compact('action_icons', 'clients'));
    }
}
