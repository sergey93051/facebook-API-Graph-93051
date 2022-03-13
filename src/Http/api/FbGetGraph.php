<?php

namespace Fbvendor\Grathapi\Http\api;

use Fbvendor\Grathapi\FResources\GetData;
use Exception;

class FbGetGraph extends GetData
{
    private $name; 

    public $date;
    
    public function __construct($name, $date='')
    {
        
        $this->date = $date;
        $this->name = $name;

        parent::__construct($this->date);
    }

    public function getName(){
        
       return  $this->name;
    }

    public function getGraph()
    {

        try {
            switch ($this->getName()) {
                case  "profile":
                    return  $this->getProfile();
                    break;
                case 'pageView':
                      return $this->getPageView();
                    break;
                case 'pageReactions':
                      return $this->getPageReactions();
                    break;               
                default:
                    throw new Exception("empty data");
            }
        } catch (Exception $e) {
            return 'Message:' . $e->getMessage();
        }
    }
}
