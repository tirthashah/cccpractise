<?php
class Model_Request {
	// public function __construct(){
	// }

	public function getParams($key = '') {
		return ($key == '')
			? $_REQUEST
			: (isset($_REQUEST[$key])
				? $_REQUEST[$key]
				: ''
			);
	}

	public function getPostData($key = '') {
		return ($key == '')
			? $_POST
			: (isset($_POST[$key])
				? $_POST[$key]
				: ''
			);
	}

	public function getQueryData($key = '') {
		return ($key == '')
			? $_GET
			: (isset($_GET[$key])
				? $_GET[$key]
				: ''
			);
	}

	public function isPost()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    return true;
		}
		return false;
	}

	public function getRequesturi(){
		 $Reuesturi=$_SERVER['REQUEST_URI'];
		 return str_replace("cybercom_prec/MVCLIB/","", $Reuesturi);

		//echo $_SERVER['REQUEST_URI']
		
		//return $Reuesturi ;
	}
}
