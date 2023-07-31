<?php

namespace Joomla\Component\Custompage\Administrator\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_custompage
 *
 * @copyright   Copyright (C) 2023 Martin Seymann, based on John Smith. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * Default Controller of custompage component
 *
 * @package     Joomla.Administrator
 * @subpackage  com_custompage
 */
class DisplayController extends BaseController {
    /**
     * The default view for the display method.
     *
     * @var string
     */
    protected $default_view = 'hello';

    public function display($cachable = false, $urlparams = array()) {
        return parent::display($cachable, $urlparams);
    }

}
