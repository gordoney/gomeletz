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
<div class="mod_page_contacts_gr">
    <div class="page-header">
        <?php echo $params->get('name-module'); ?>
    </div>
    <div class="organization">
        <?php echo $params->get('name-org'); ?>
    </div>

    <div class="info clearfix">
        <div class="left">
            <div class="address">
                <?php echo $params->get('address'); ?>
            </div>
            <div class="phones">
                <?php foreach ($phones as $phone) { ?>
                    <div class="phone"><?php echo $phone['phone-text']; ?> <?php echo $phone['phone-content']; ?></div>
                <? } ?>
            </div>
        </div>
        <div class="right">
            <div class="emails">
                <?php foreach ($emails as $email) { ?>
                    <div class="email"><?php echo $email['email-text']; ?> <a href="mailto:<?php echo $email['email-content']; ?>"><?php echo $email['email-content']; ?></a></div>
                <? } ?>
            </div>
        </div>
    </div>
</div>