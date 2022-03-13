<?php

namespace Fbvendor\Grathapi\Graph;

use Fbvendor\Grathapi\Http\api\FbGetGraph;

class App {    


    public function get($value,$date){
       
        $fbGetGraph = new FbGetGraph($value,$date);
        return $fbGetGraph->getGraph();
        
    }

    public function post(){
        return "post";
    }
}