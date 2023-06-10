<?php 
class Uppercase implements ChangeCase
{
	public function uppercase($inputInform,$convertTypes)
	{
		if ($convertTypes == "uppercase")
		{	
			$strConvert3 = strtoupper($inputInform);
			echo $strConvert3."<br>";
			
			$strSum3 = (str_word_count($inputInform));
			if ($strSum3 == 1)
			{
				echo "In a sentence ".$strSum3." word and ";
			}
			else
			{
				echo "In a sentence ".$strSum3." words and ";
			}
				
			$symbSum3 = (iconv_strlen($inputInform));
			if ($symbSum3 == 1)
			{
				echo $symbSum3." symbol."."<br>";
			}
			else
			{
				echo $symbSum3." symbols."."<br>";
			}
				
			return $strConvert3;
		}
	}

}
?>