<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_footer
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die; 

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base().'modules/'.$module->module.'/css/style.css');

require_once dirname(__FILE__).'/helper.php';

$socialButtons = modSocialGrHelper::getSocialButtons($params);

require JModuleHelper::getLayoutPath('mod_social_gr', $params->get('layout', 'default'));
?>
