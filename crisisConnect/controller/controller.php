<?php
class Controller
{
	public $model=null;

	public function getPage()
	{		
		$command=null;
		
		if(isset($_REQUEST['command']))
			$command=$_REQUEST['command'];

		
		switch($command)	
		{
			case 0:
			{
				include('view/home.php');
				break;
			}
			case 1:
			{
                include('view/dbArch.php');
				break;
				
			}
			case 2:
			{
				include('view/erd.php');
				break;
			}
			case 3:
			{
				include 'view/query.php';		
				break;
			}
            
	    }
    }
}
?>