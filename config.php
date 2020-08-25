<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '315095779570951',
  'app_secret'     => '6b0b97a0553dc9ac454cf33db6f8531f',
  'default_graph_version'  => 'v2.10'
]);

?>