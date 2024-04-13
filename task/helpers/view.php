<?php

require_once "base_path.php";

function view(String $path, Array $attributes = [], Array $css_array = [], Array $js_array = [])
{
    extract($attributes);

    $css = '';
    foreach ($css_array as $css_file_name) {
        $css .= '<link rel="stylesheet" href="assets/css/' . $css_file_name . '.css">
        ';
    }
    
    $js = '';
    foreach ($js_array as $js_file_name) {
        $js .= '<script src="assets/js/' . $js_file_name . '.js" type="module"></script>
        ';
    }

    $header = require base_path('assets/components/header.php');
    $navbar = require base_path('assets/components/navbar.php');
    $footer = require base_path('assets/components/footer.php');

    require base_path('App/views/' . $path . '.view.php');
}
