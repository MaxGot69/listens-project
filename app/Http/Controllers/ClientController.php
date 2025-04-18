<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Events\ClientCreated;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function store(Request $request)
{
    $client = new Client();
    $client->name = $request->name;
    $client->email = $request->email;
    $client->save();

    // Запускаем событие
    event(new ClientCreated($client));

    return redirect()->route('clients.index');
}

public function create(){
    return view ('clients.create');
}
}
