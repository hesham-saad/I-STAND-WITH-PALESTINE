<?php
/*
Plugin Name: I STAND WITH PALESTINE 
Description: add "I STAND WITH PALESTINE" to any WordPress website.
Version: 1.0
Author: Hesham Saad
Author URI: https://heshamsaad.com
License: GPLv2 or later
*/

if(!defined('ABSPATH')){
    exit;
}

add_action('wp_head', 'iswp_add_to_head', 0);
function iswp_add_to_head(){
    ?>
    <div class="iswp-bar">🇵🇸 I STAND WITH PALESTINE 🇵🇸</div>
    <style>
        .iswp-bar{
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            background-color: #dd0000;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            height: 40px;
        }
    </style>    
    <?php
}