<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$item_heading = $params->get('item_heading', 'h4');
?>

<a href="<?php echo $item->link; ?>">
	<?php if ($params->get('item_title')) : ?>
		<div class="title">
			<div class="date">
				<div class="date-dm"><?php echo JHtml::_('date', $item->publish_up, JText::_('DATE_FORMAT_NEWS1')); ?></div>
				<div class="date-y"><?php echo JHtml::_('date', $item->publish_up, JText::_('DATE_FORMAT_NEWS2')); ?></div>
			</div>
			<div class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
				<?php echo $item->title; ?>
			</div>
		</div>
	<?php endif; ?>

	<?php if (!$params->get('intro_only')) : ?>
		<?php echo $item->afterDisplayTitle; ?>
	<?php endif; ?>

	<?php echo $item->beforeDisplayContent; ?>

	<div class="prev-text">
		<?php echo $item->introtext; ?>
	</div>

	<?php echo $item->afterDisplayContent; ?>

	<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
		<?php echo '<a class="readmore" href="' . $item->link . '">' . $item->linkText . '</a>'; ?>
	<?php endif; ?>
</a>