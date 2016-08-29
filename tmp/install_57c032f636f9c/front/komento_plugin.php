<?php
/**
 * @package	AcyMailing for Joomla!
 * @version	5.5.0
 * @author	acyba.com
 * @copyright	(C) 2009-2016 ACYBA S.A.R.L. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><?php
defined('_JEXEC') or die('Restricted access');

require_once(JPATH_ROOT.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_komento'.DIRECTORY_SEPARATOR.'komento_plugins'.DIRECTORY_SEPARATOR.'abstract.php');
require_once(JPATH_ADMINISTRATOR.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_acymailing'.DIRECTORY_SEPARATOR.'helpers'.DIRECTORY_SEPARATOR.'helper.php');

class KomentoComAcymailing extends KomentoExtension
{
	public $_item;
	public $_map = array(
		'id'			=> 'mailid',
		'title'			=> 'subject',
		'created_by'	=> 'userid'
	);

	public function load($cid){
		static $instances = array();

		if(!isset($instances[$cid])){
			$mailClass = acymailing_get('class.mail');
			$this->_item = $mailClass->get($cid);

			$instances[$cid] = $this->_item;
		}

		$this->_item = $instances[$cid];

		return $this;
	}

	public function getContentIds($categories = ''){
		if(empty($categories)) return array();

		JArrayHelper::toInteger($categories);
		$db	= JFactory::getDBO();
		$db->setQuery('SELECT DISTINCT mailid FROM #__acymailing_listmail WHERE listid IN ('.implode(',', $categories).')');
		return acymailing_loadResultArray($db);
	}

	public function getContentHits(){
		return 0;
	}

	public function getCategoryId(){
		$db	= JFactory::getDBO();
		$db->setQuery('SELECT listid FROM #__acymailing_listmail WHERE mailid = '.intval($this->_item->mailid));
		return $db->loadResult();
	}

	public function getContentPermalink(){
		return 'index.php?option=com_acymailing&ctrl=archive&task=view&tmpl=component&mailid='.intval($this->_item->mailid);
	}

	public function getCategories(){
		$db	= JFactory::getDBO();
		$db->setQuery('SELECT listid AS id, name AS title, 0 AS level, 0 AS parent_id FROM '.acymailing_table('list').' WHERE type = \'list\' ORDER BY ordering ASC');

		return $db->loadObjectList();
	}

	public function isListingView(){
		return false;
	}

	public function isEntryView(){
		return true;
	}

	public function onExecute(&$article, $html, $view, $options = array()){
		return $html;
	}

	public function getComponentName(){
		return 'AcyMailing';
	}

	public function getComponentIcon(){
		return JURI::root().'media/com_acymailing/images/icons/icon-48-acymailing.png';
	}
}
