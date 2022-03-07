<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ClientsController;

use Illuminate\Http\Request;

class ApiRiot extends Controller
{
    private $url = "https://euw1.api.riotgames.com/tft/summoner/v1/summoners/by-name/";
    private $token = "RGAPI-cd130e8b-c56e-4230-8fa4-2a38c9c215ae";
    private $accept_charset = "application/x-www-form-urlencoded; charset=UTF-8";
    private $origin = "https://developer.riotgames.com";

    public function getUrl() {
        return $this->url; 
    }

    public function setUrl() {
        $this->url; 
    }

    public function getToken() {
        return $this->token; 
    }

    public function setToken() {
        $this->token; 
    }
    
    public function getAccept_charset() {
        return $this->accept_charset; 
    }

    public function setAccept_charset() {
        $this->accept_charset; 
    }
    
    public function getOring() {
        return $this->origin; 
    }

    public function setOrigin() {
        $this->origin; 
    }   
}
