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
            "icon:trash | color:red | click:deleteClient({id}, '{name}')",
        ];

        $clients = Client::all();

        return view('clients.index', compact('action_icons', 'clients'));
    }

    public function store(Request $request)
    {

        Client::create([
            'name' => $request->name,
            'organization' => $request->organization,
            'email' => $request->email,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'notes' => $request->notes,
        ]);

        return redirect()->back()->with('success', 'Client added successfully!');
    }

    public function destroy($id)
    {
        $client = Client::find($id)->delete();

        return redirect()->route('clients');
    }
}
