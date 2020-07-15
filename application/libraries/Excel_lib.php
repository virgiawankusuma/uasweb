<?php if(!defined('BASEPATH')) die('No Access');
require_once APPPATH."/third_party/PHPExcel.php";
require_once APPPATH."/third_party/PHPExcel/IOFactory.php";
require_once APPPATH."/third_party/PHPExcel/Writer/Excel2007.php";

/**
 * 
 */
class Excel_lib extends PHPExcel
{
	
	function __construct()
	{
		parent::__construct();
	}
}
