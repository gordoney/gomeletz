<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_popular
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

abstract class modSocialGrHelper
{
	static public function getSocialButtons($params) {
		$socialButtons = array();
		foreach (json_decode($params->get('social')) as $nameFields=>$fields) {
			foreach ($fields as $key=>$field) {
				$socialButtons[$key][$nameFields] = $field;
			}
		}

		return $socialButtons;
	}
}

