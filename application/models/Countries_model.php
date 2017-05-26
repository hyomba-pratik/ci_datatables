<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countries_model extends CI_Model implements DatatableModel
{
	public function appendToSelectStr()
	{
		return NULL;

	}

	public function fromTableStr()
	{
		return 'apps_countries';

	}


	public function joinArray()
	{
		return;

	}

	public function whereClauseArray()
	{
		return;
	}

}
