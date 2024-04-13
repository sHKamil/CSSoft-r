<?php

require_once "base_path.php";

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('App/views/' . $path . '.view.php');
}
