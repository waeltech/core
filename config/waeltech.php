<?php

return [

  /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

  'domain' => env('APP_DOMAIN', null),
  'app_domain' => env('APP_DOMAIN', null),
  'api_prefix' => env('APP_API_PREFIX', 'api'),
  /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

  'app_url' => env('APP_URL', 'http://localhost'),
  'admin_url' => env('APP_ADMIN_URL', 'http://admin.localhost/'),


];
