<?php
// define('APP_NAME', 'My app');
// define('APP_VERSION', '1.0.0');
const APP_NAME  = 'My app';
const APP_VERSION = '1.0.0';

echo APP_NAME, '<br>', APP_VERSION, '<br>';


function getAppName()
{
    return APP_NAME;
}

echo getAppName(), '<br>';

class Person
{
    const AVG_LIFE_SPAN = 79;

    function getAverageLifeSpan()
    {
        return self::AVG_LIFE_SPAN;
    }
}

$person = new Person();
echo $person->getAverageLifeSpan();
