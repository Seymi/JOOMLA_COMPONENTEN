<?php

namespace Joomla\Component\Custompage\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Factory;

/**
 * @package     Joomla.Site
 * @subpackage  com_custompage
 *
 * @copyright   Copyright (C) 2023 Martin Seymann, based on John Smith. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * CustomePage Component Controller
 * @since  0.0.2
 */
class DisplayController extends BaseController {

    public function display($cachable = false, $urlparams = array()) {
        $document = Factory::getDocument();
        $viewName = $this->input->getCmd('view', 'login');
        $viewFormat = $document->getType();

        $view = $this->getView($viewName, $viewFormat);
        $view->setModel($this->getModel('Message'), true);

        $view->document = $document;
        $view->display();
    }

}
