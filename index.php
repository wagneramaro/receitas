<?php
/*
Plugin name: Receitas
Description: Um plugin simples para adição  e configuração de receitas.
Version: 1.1
Author: Wagner Amaro
Author URI: https://wagneramaro.github.io
Text Domain: receitas
*/
if(!function_exists('add_action')){
	echo __('Zzzz... Eu sou um plugin, não posso ser chamado diretamente!', 'receitas');
	exit;
}

//SETUP

//INCLUDES
require('includes/activate.php');
include('includes/init.php');

//HOOKS
register_activation_hook(__FILE__, 'br_activate_plugin');
add_action('init', 'br_receitas_init');

//SHORTCODES







function bt_title($title){
	return '[ALTERADO] '.$title;
}

function bt_head(){
	echo "TEXTO PERSONALIZADO<BR>";
}

function bt_head2(){
	do_action('bt_hook_personalizado');
}


function bt_personalizado(){
	echo "HOOK ACIONADO!";
}

add_filter('the_title', 'bt_title');

add_action('bt_hook_personalizado', 'bt_personalizado');
add_action('wp_head', 'bt_head', 5);
add_action('wp_head', 'bt_head2', 11);