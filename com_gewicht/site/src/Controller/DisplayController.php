<?php

namespace Joomla\Component\Gewicht\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Factory;

/**
 * @package     Joomla.Site
 * @subpackage  com_gewicht
 *
 * @copyright   Copyright (C) 2023 Martin Seymann. All rights reserved.
 * @license     GNU General Public License version 3
 */

/**
 * Gewicht Component Controller
 * @since  0.0.2
 */
class DisplayController extends BaseController {

    public function display($cachable = false, $urlparams = array()) {
        $document = Factory::getDocument();
        $viewName = $this->input->getCmd('view', 'login');
        $viewFormat = $document->getType();

        $view = $this->getView($viewName, $viewFormat);
        $view->setModel($this->getModel('Einheiten'), true);

        $view->document = $document;
        $view->display();
    }

}
