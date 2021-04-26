<?php

function time_diff_min($date)
{
    return abs(strtotime($date) - time()) / 60;
}


function setSession($value = array())
{
    session()->set($value);
}
function sessionRemove($name = null)
{
    session()->remove($name);
}
function getSession($name = null)
{
    if (empty(session($name))) {
        return null;
    }
    return session($name);
}


function setURL($url)
{
    if (!empty(service('request')->getLocale())) {
        return base_url(service('request')->getLocale().'/'.$url);
    }

    return base_url($url);
}
function urlWithLocale($url = null)
{
    return '/'.service('request')->getLocale().$url;
}
function locale()
{
    return service('request')->getLocale();
}