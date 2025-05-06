<?php

function brojSlova($string)
{
    return mb_strlen($string, 'UTF-8');
}

function sadrziA($nekiString)
{
    return mb_strpos(strtolower($nekiString), 'a') !== false ? 'DA' : 'NE';
}

function velikaSlova($string)
{
    return strtoupper($string);
}

function malaSlova($string)
{
    return strtolower($string);
}