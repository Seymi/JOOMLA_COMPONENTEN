<?php

use Joomla\CMS\Language\Text;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_custompage
 *
 * @copyright   Copyright (C) 2023 Martin Seymann, based on John Smith. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

 // No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>

<!-- UIkit CSS
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.22/dist/css/uikit.min.css" />
-->

<!-- UIkit JS
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.22/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.22/dist/js/uikit-icons.min.js"></script>
-->

<h2><?= Text::_('COM_CUSTOMPAGE_MSG_HELLO') ?></h2>
<p><?= $this->getModel()->getItem()->message; ?></p>
