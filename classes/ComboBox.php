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
 * Namespace
 */
namespace CK;


* Combobox Widget
 *
 * @copyright  Carsten Kollmeier 2014
 * @author    Carsten Kollmeier <carsten@ckollmeier.de>
 * @package    CKTools
 */

class ComboBox extends \SelectMenu
{
	/**
	* Overide method isValidOption
	**/
	protected function isValidOption($varValue) {
		return true;
	}


	/**
	 * Generate the widget and return it as string
	 * @return string
	 */
	public function generate()
	{
		$this->chosen = true;
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/ck_combo_box/assets/ck_combo_box-uncompressed.js';
		$GLOBALS['TL_CSS'][] = 'system/modules/ck_combo_box/assets/ck_combo_box-uncompressed.css';
		return str_replace('tl_select','tl_select ck_combo',parent::generate());
	}
}
