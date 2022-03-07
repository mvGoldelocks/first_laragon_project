<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controller\ApirRiot;

class UserController extends ApiRiot
{
    public function BySummoner($data)
    {
        $nickname = $data;

        if(!empty($nickname))
        {
            $nickname = str_replace(" ","",$nickname);
            echo 'pseudo pas vide : '.$nickname;

            echo '</br> ICI : '.$this->getUrl();

            $ch = curl_init($this->getUrl().$nickname);

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Accept-Language: fr-FR,fr;q=0.9,en-US;q=0.8,en;q=0.7',
                'Cache-Control: no-cache',
                'X-Riot-Token: RGAPI-cd130e8b-c56e-4230-8fa4-2a38c9c215ae',
                'Accept-Charset: application/x-www-form-urlencoded; charset=UTF-8',
                'Origin: https://developer.riotgames.com'
                ));
        
            $reponse = curl_exec($ch);
            curl_close($ch);     

            $decoded_json = json_decode($reponse);

            echo "<pre>";
            print_r($decoded_json);
            echo "</pre>";
          
           
           
        }
    
    }

    

}
    