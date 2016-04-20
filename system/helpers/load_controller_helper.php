<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('load_controller'))
{
    function load_controller($controller)
    {
        require_once(APPPATH . 'controllers/' . $controller . '.php');
    }
}
?>
