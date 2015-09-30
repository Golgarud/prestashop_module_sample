<?php
/**
*2015 Bulko
*
*Dummy module
*
*@author    Bulko (Golga)
*@copyright Copyright (c) Bulko
*@license   Addons PrestaShop license
*
*DummyControllerModuleFrontController tab for admin panel
*/
class DummyControllerModuleFrontController extends ModuleFrontController
{	
	public function initContent()
	{
		parent::initContent();
		global $smarty;
		die();
	}
}
?>