<?php
	require_once APPPATH."third_party/PHPExcel.php";

	class Excel Extends PHPExcel
	{
		public function __construct()
		{
			parent:: __construct();
			
		}
	}
?>