<?php

if (!function_exists('current_user')) {
  function current_user()
  {
    return 'test current user';
  }
}
