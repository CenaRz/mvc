<?php

function site_url($route){
    return $_ENV['HOST'] . $route;
}

function assets_url($route){
    return site_url("assets/" . $route); 
}