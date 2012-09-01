<?php
/**
*
* @package Colorized Unread Links
* @version $Id$
* @copyright (c) 2012 _Vinny_ vinny@suportephpbb.com.br http://www.suportephpbb.com.br
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_colorized_unread_links_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_colorized_unread_links',
			'title'		=> 'ACP_COLORIZED',
			'version'	=> '1.1.1',
			'modes'		=> array(
				'settings'		=> array('title' => 'ACP_COLORIZED_SETTINGS', 'auth' => 'acl_a_board', 'cat' => array('ACP_COLORIZED')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>