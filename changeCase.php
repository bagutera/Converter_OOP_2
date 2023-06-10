<?php
interface ChangeCase 
{
	if (!empty($_GET['inputInform']))
	$inputInform = $_GET['inputInform'];

	if (!empty($_GET['convertTypes']))
	$convertTypes = $_GET['convertTypes'];
	
	$inputInform = htmlspecialchars($_GET["inputInform"], ENT_QUOTES);

	changeCase($inputInform,$convertTypes)
	{
	
		$case1 = new FirstCapt();
		$case1->firstCapt();

		$case2 = new LowerCase();
		$case2->lowerCase();

		$case3 = new Uppercase();
		$case3->uppercase();
	}
	
}

