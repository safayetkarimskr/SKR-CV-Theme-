<?php
/**
*  P5Homes function and definations
* 
* Sets up the theme and provides some helper functions.
* 
* @package WordPress 
* @subpackage P5Homes
*/

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */
function loadView($viename){
        //load footer/header page
        include_once "common/$viename.php";
    }
?>