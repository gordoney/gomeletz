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
<div class="mod-features-gr">
    <div class="features clearfix">
	<?php foreach ($features as $feature) { ?>
        <div class="feature clearfix">
            <div class="img" style="background-image: url(<?php echo $feature['img']; ?>);"></div>
            <div class="text">
                <div class="bold"><?php echo $feature['bold-text']; ?></div>
                <div class="normal"><?php echo $feature['normal-text']; ?></div>
            </div>
        </div>
	<? } ?>
    </div>
</div>