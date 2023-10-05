<?php
require 'config.php';

$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = str_replace(APP_URL,'',$url);
$exp_url = explode('/',$url);

if(count($exp_url) > 1)
{
    die('URL Error');
}
else
{
    $slug = $exp_url[0];
    if(! preg_match('/^[a-z0-9]*$/', $slug)) 
    {
        die('Slug Invalid');        
    }     
}

if(file_exists(APP_PATH.'/json/'.$slug.'.json'))
{
    die('Data Not Found');    
}
else
{
    
}

echo ':D -> '.$slug;
?>