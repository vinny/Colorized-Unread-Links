<?php
/**
*
* @package Colorized Unread Links [English]
* @version $Id$
* @copyright (c) 2012 _Vinny_ vinny@suportephpbb.com.br http://www.suportephpbb.com.br
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// acp module, titles 
	'ACP_COLORIZED' 			=> 'Colorized Unread Links',
	'ACP_COLORIZED_SETTINGS'	=> 'Settings',
	'ACP_COLORIZED_EXPLAIN'		=> 'Here you can manage colorized unread links on your board.',
	
	// acp config
	'ACP_COLORIZED_ENABLE'		=> 'Enable',
	'ACP_COLORIZED_ENABLE_EXPLAIN'		=> 'Enable Colorized Unread Links Mod',
	'ACP_COLORIZED_LINKS_COLOR'	=> 'Change the color',
	'ACP_COLORIZED_LINKS_COLOR_EXPLAIN'=> 'Insert the hexadecimal code for the desired color. Example: #FF0000',
	'ACP_COLOR_FILL_FIELD'		=> 'Error. Please fill the field with the color for the links.',
	
	// install
	'COLORIZED_INSTALL' 		=> 'Colorized Unread Links MOD',
	'COLORIZED_INSTALL_EXPLAIN' => '',

	));
?>