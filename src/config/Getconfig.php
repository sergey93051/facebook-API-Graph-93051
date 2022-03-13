<?php

namespace Fbvendor\Grathapi\config;

trait Getconfig{
      

     public static function setKey()  
     {
       return json_encode([
             "get" => [
               "header" => "https://graph.facebook.com/",
               "version" => config("fbconfig.version"),
               "token" => 'access_token='.config("fbconfig.token"),
               "fbaccount" =>  config("fbconfig.fbaccount"),
             ]
       ]);
        
     }

     public static function getkeys(){
        return json_decode(self::setKey());
     }


}

