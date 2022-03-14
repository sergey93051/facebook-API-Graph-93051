# Facebook analytics Graph API 

### This repository contains the open source  that allows you to access the Facebook Platform from your Laravel app;

1.The package can be installed with Composer. Run this command:

    
    composer require fbvendor/grathapi 
    
    
2.Publish the public assets:

    php artisan vendor:publish --provider="Fbvendor\\Grathapi\\Providers\\FbpublishesServiceProvider"

3. add variable to .env
  
    - FBTOKEN='token'
    - FCACCAUNT='Id'
    
 
  Note: This version of the Facebook analytics for PHP requires PHP 7.1 or greater. 
  
 Simple GET example of a page profile.
 
![Screenshot from 2022-03-14 18-28-52](https://user-images.githubusercontent.com/49534288/158193284-df2c542b-029e-4996-8a5d-d645ae0030e5.png)
 
   
 
    
 
