<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_media
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

$title = Text::_('COM_MEDIA_CREATE_NEW_FOLDER');
?>
<button class="btn btn-sm btn-info" onclick="MediaManager.Event.fire('onClickCreateFolder');" type="button">
    <span class="icon-folder-close" title="<?php echo $title; ?>"></span> <?php echo $title; ?>
</button>
