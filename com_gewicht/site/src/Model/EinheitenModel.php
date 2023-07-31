<?php

namespace Joomla\Component\Gewicht\Site\Model;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Model\ItemModel;
use Joomla\CMS\Language\Text;

/**
 * @package     Joomla.Site
 * @subpackage  com_custompage
 *
 * @copyright   Copyright (C) 20203 Martin Seymann. All rights reserved.
 * @license     GNU General Public License version 3
 */

/**
 * Hello World Message Model
 * @since 1.1.2
 */
class MessageModel extends ItemModel {

    /**
     * Returns a message for display
     * @param integer $pk Primary key of the "Gewichtseinheit", currently unused
     * @return object Message object
     */
    public function getItem($pk= null): object {

        $input = Factory::getApplication()->getInput();
        $greetingType = $input->getInt('Gewichtseinheit', 1);

        $item = new \stdClass();

        switch($greetingType) {
            case 2:
                $item->message = 'lbs';
                break;
            case 1:
            default:
                $item->message = 'kg';
                break;
        }

        return $item;
    }

}
