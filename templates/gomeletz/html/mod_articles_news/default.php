<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="newsflash<?php echo $moduleclass_sfx; ?> mod-article-news">
	<div class="block-name">
		<span><?php echo JText :: _('MOD_ARTICLE_NEWS_NAME'); ?></span>
	</div>

	<div class="single-block clearfix">
		<?php foreach ($list as $item) : ?>
			<div class="single">
				<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="all">
		<a href="<?php echo JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.json_decode($module->params)->catid[0]); ?>">
			<span><?php echo JText :: _('MOD_ARTICLE_NEWS_ALL'); ?></span>
		</a>
	</div>
</div>
