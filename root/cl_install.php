<?php

/**
* @author _Vinny_ vinny@suportephpbb.com.br http://www.suportephpbb.com.br
* @author RMcGirr83 (Rich McGirr) rmcgirr83@gmail.com
* @package Colorized Unread Links
* @version $Id cl_install.php
* @copyright (c) 2012 _Vinny_, RMcGirr83 ( http://www.rmcgirr83.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
   trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$language_file = 'mods/info_acp_colorized_unread_links';
$mod_name = 'COLORIZED_INSTALL';
$version_config_name = 'cl_version';

$versions = array(
   // Version 1.0.0
   '1.0.0'   => array(
      // Lets add a config setting
      'config_add' => array(
         array('colorized_links', '#FF0000'),
      ),
   ),


   // Version 1.1.0
   '1.1.0'   => array(
      // Lets add a config setting
      'config_add' => array(
         array('enable_colorized_links', true),
      ),

   // Now add the module
	'module_add' => array(
		// First, lets add a new category named ACP_COLORIZED to ACP_CAT_DOT_MODS
		array('acp', 'ACP_CAT_DOT_MODS', 'ACP_COLORIZED'),
		// next let's add our module
		array('acp', 'ACP_COLORIZED', array(
				'module_basename'	=> 'colorized_unread_links',
				'modes'				=> array('settings'),
				),
			),
		),
	),

	'1.1.1'	=> array(
	//Nothing to do in this version
	),	
);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>