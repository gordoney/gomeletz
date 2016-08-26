<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_popular
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="mod_social_gr">
    <div class="social-name">
        <?php echo JText :: _('MOD_SOCIAL_GR_TEXT'); ?>
    </div>
	<?php foreach ($socialButtons as $socialButton) { ?>
		<div style="background-color: #<?php echo $socialButton['color']; ?>;">
			<a href="<?php echo $socialButton['url']; ?>">
				<i class="icon-<?php echo $socialButton['social_type']; ?>"></i>
			</a>
		</div>
	<? } ?>
</div>