<?php

use Illuminate\Support\Facades\Request;

function setActive($path)
{
    return Request::is($path . '*') ? 'link-active' :  '';
}
