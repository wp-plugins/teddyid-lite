<?php
/*
Plugin Name: Teddy ID Lite
Plugin URI: https://www.teddyid.com/
Text Domain: teddyidlite
Description: Allow your visitors to log in without entering a password.
Version: 1.0.0
Author: Matrix Platform LLC
License: Public domain
*/

class TeddyIDLite
{
    const TEDDY_STR = '<script src="https://www.teddyid.com/js/teddypass.js" defer=""></script>';
    
    public static function showWidget(){
        echo self::TEDDY_STR;
    }
    public static function install(){}
}



register_activation_hook( __FILE__, array('TeddyIDLite', 'install') );
add_action('login_form', array('TeddyIDLite', 'showWidget'));
