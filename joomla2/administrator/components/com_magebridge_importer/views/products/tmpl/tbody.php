<?php 
/*
 * Joomla! component MageBridge
 *
 * @author Yireo (info@yireo.com)
 * @package MageBridge
 * @copyright Copyright 2014
 * @license GNU Public License
 * @link http://www.yireo.com
 */

defined('_JEXEC') or die('Restricted access');
?>
<td>
    <a href="<?php echo $item->custom_edit_link; ?>" title="<?php echo JText::_('COM_MAGEBRIDGE_VIEW_STORE_ACTION_EDIT'); ?>"><?php echo $item->name; ?></a>
</td>
<td>
    <a href="<?php echo $item->custom_edit_link; ?>" title="<?php echo JText::_('COM_MAGEBRIDGE_VIEW_STORE_ACTION_EDIT'); ?>"><?php echo $item->sku; ?></a>
</td>
<td>
    <?php echo $item->price; ?>
</td>
<td>
    <?php echo $item->status; ?>
</td>
