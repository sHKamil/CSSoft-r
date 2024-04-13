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
        $js .= '<script src="assets/js/' . $js_file_name . '.js"></script>
        ';
    }

    $bootstrap_js = '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>'; 
    $header = require base_path('assets/components/header.php');
    $navbar = require base_path('assets/components/navbar.php');
    $footer = require base_path('assets/components/footer.php');

    require base_path('App/views/' . $path . '.view.php');
}
