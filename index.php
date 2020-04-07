<?php 
/**
 * 
 */
class main
{
	
	function __construct()
	{
		include('Tampilan/header.php');
		include('Tampilan/menu.php');
	}



	public function getPage($page){
		if($page=='main'){
			include('Konten/main.php');
		}
		else if ($page=='assets') {
			include("Konten/assets.php");
		}
	}
}
$page = isset($_GET['page']) ? $_GET['page'] : 'main';
$main = new main();
$main->getPage($page);

 ?>