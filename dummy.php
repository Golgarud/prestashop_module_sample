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
*Dummy main module
*/
class Dummy extends Module
{
	function __construct()
	{
		$this->name = 'Dummy';
		$this->tab = 'Dummy';
		$this->version = 0.1;
		$this->author = 'Bulko';
		$this->displayName = $this->l('Dummy');
		$this->description = $this->l('Dummy prestashop module sample <3');
 
		parent::__construct();
	}

	function install()
	{
		if ( !parent::install() || !$this->registerHook('actionValidateOrder') )
		{
			return false;
		}
		
		return true;
	}
 
	public function uninstall()
 	{
 	 	if ( !parent::uninstall() )
 	 	{
 	 		return false;
 	 	}
 	}
}
?>