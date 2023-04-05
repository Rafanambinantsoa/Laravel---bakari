<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class smstest extends Controller
{
    public function index(){
        $receiver_number = '+2613229750000';
        // $message = 'Hello form kim';
 
        // Update the path below to your autoload.php, 
        // see https://getcomposer.org/doc/01-basic-usage.md 
         
         
        $sid    = getenv("TWILIO_SID"); 
        $token  =getenv("TWILIO_TOKEN"); 
        $kim  =getenv("TWILIO_FROM"); 
        $twilio = new Client($sid, $token); 
         
        $message = $twilio->messages 
                          ->create("+261344145855", // to 
                                   array(        
                                       "body" => "Bonjour  , je suis tsukasa shishio de la  gouvernement de shogun , je te défie sur une arene  de durant la pleine lune aux mont dragor , bof its just for a joke " ,
                                        "from" => $kim
                                   ) 
                          ); 
         
        print($message->sid);
    }
}
