<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function list()
    {
        $clients = [
            'Jean',
            'Louis',
            'Pat'
        ];

        return view('clients', [
            'clients' => $clients
        ]);
    }
}
