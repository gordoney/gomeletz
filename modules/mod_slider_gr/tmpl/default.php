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
<div class="mod-slider-gr">
	<div class="slick-slider js-slick-slider">
		<?php foreach ($slides as $key => $slide) { ?>
			<div class="item" style="background-image: url(<?php echo $slide['img']; ?>);">
				<div class="container">
					<div class="text">
						<span><?php echo $slide['text']; ?></span>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="dots-container">
		<div class="container">
			<div class="dots">
				<?php for ($i=1; $i <= count($slides); $i++) { ?>
					<div class="dot js-dot <?php if ($i == 1) { echo 'active'; } ?>"></div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>