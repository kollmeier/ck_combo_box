<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   ComboBox
 * @author    Carsten Kollmeier <carsten@ckollmeier.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * @copyright Carsten Kollmeier 2014
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'CK',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'CK\ComboBox' => 'system/modules/ck_combo_box/classes/ComboBox.php',
));
