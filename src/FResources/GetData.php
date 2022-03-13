<?php

namespace Fbvendor\Grathapi\FResources;

use Fbvendor\Grathapi\FBInterface\FBResources;

use Fbvendor\Grathapi\config\Getconfig;


class GetData implements FBResources
{

     use Getconfig;

     public function __construct($date = '')
     {

          $this->date = $date;
     }

     public function getProfile()
     {

          return json_decode(
               file_get_contents(self::getkeys()->get->header . self::getkeys()->get->version . "/me?fields=id%2Cname%2Cpicture%2Clink%2Cemails%2Capp_id&" . self::getkeys()->get->token)
          );
     }


     public function getPageView()
     {

          return json_decode(
               file_get_contents(self::getkeys()->get->header . self::getkeys()->get->version . "/" . self::getkeys()->get->fbaccount . "/insights/page_views_total/{$this->date}?" . self::getkeys()->get->token)
          );
     }

     public function getPageReactions()
     {

          return json_decode(
               file_get_contents(self::getkeys()->get->header . self::getkeys()->get->version . "/" . self::getkeys()->get->fbaccount . "/insights/page_actions_post_reactions_total/{$this->date}?" . self::getkeys()->get->token)
          );
     }
}
