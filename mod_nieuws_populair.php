<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_nieuws_populair
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the popular functions only once
JLoader::register('ModNieuwsPopulairHelper', __DIR__ . '/helper.php');

$list = ModNieuwsPopulairHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

$title = $module->title;
$color = $params->get('color');

// Add CSS
$document = JFactory::getDocument();
$document->addStyleSheet(JUri::base().'modules/mod_nieuws_populair/tmpl/style.css');

require JModuleHelper::getLayoutPath('mod_nieuws_populair', $params->get('layout', 'default'));
