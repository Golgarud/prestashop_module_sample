<?php
/**
*2015 Bulko
*
*Dummy module
*
*@author	Bulko (Golga)
*@copyright	Copyright (c) Bulko
*@license	Addons PrestaShop license
*
*AdminDummyController tab for admin panel
*/

class AdminDummyController extends AdminController
{
	public function __construct()
	{
		$this->bootstrap = true;
		$this->lang = true;
		parent::__construct();
	}

	public function initContent()
	{
		global $smarty;
		$this->display = 'view';
		parent::initContent();
	}

	public function renderView()
	{
		return parent::renderView();
		return parent::renderView();
	}

	public function initToolBar()
	{
		return null;
	}
}