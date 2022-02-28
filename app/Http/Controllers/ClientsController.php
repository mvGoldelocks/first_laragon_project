<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function list($nickname)
    {

        $result = $nickname.'Olelele';

        /*$clients = [
            'Jean',
            'Louis',
            'Pat'
        ];*/

       /* return view('clients', [
            'clients' => $clients
        ]);*/

        return  $result;
    }
}
