<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }
    
    public function show(Game $id)
    {
        return view('games.show', ['game' => $id]);
    }
    
    public function create()
    {
        return 'it works';
    }
}
