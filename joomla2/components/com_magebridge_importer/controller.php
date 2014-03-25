<?php
/**
 * Joomla! component MageBridge Importer
 *
 * @author Yireo (info@yireo.com)
 * @package MageBridge Importer
 * @copyright Copyright 2014
 * @license GNU Public License
 * @link http://www.yireo.com
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * MageBridge Importer Controller 
 *
 * @package MageBridgeImporter
 */
class MageBridgeImporterController extends YireoController
{
    /**
     * List of allowed tasks
     *
     * @protected array
     */
    protected $_allow_tasks = array(
        'display',
        'attributeset',
        'store',
    );

    /**
     * Value of the default View to use
     *
     * @protected string
     */
    protected $_default_view = 'product';

    /**
     * Display the current page
     *
     * @access public
     * @param null
     * @return null
     */
    public function display($cachable = false, $urlparams = false)
    {
        $id = JRequest::getInt('id');
        if($id > 0) {
            JRequest::setVar('layout', 'attributes');
        }

        parent::display($cachable, $urlparams);
    }

    /**
     * Handle the post of the attributeset
     *
     * @access public
     * @param null
     * @return null
     */
    public function attributeset()
    {
        $session = JFactory::getSession();
        $item = JRequest::getVar('item');

        if(!empty($item) && isset($item['attributeset_id'])) {
            $attributeset_id = $item['attributeset_id'];
            $session->set('com_magebridge_importer.attributeset_id', $attributeset_id);
        }

        if(empty($attributeset_id)) {
            $attributeset_id = $session->get('com_magebridge_importer.attributeset_id');
        }

        $this->doRedirect(null, array('layout' => 'attributes')); 
    }
}
