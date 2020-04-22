<?php
/**
 * Easy way to use superglobal variable $_GET[]
 */
function GET($value){
    return isset($_GET[$value]) ? $_GET[$value] : '';
}

/**
 * Easy way to use superglobal variable $_POST[]
 */
function POST($value){
    return isset($_GET[$value]) ? $_GET[$value] : '';
}