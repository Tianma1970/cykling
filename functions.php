<?php

function ck_register_menues() {
    register_nav_menus([
        'main-menu' => 'Main Menu'
    ]);
}

add_action('init','ck_register_menues');