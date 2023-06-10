<?php
class FirstCapt implements ChangeCase
{
	 public function firstCapt($inputInform,$convertTypes)
	{
		if ($convertTypes == "firstCapt")
		{
			$strConvert1 = ucwords(strtolower($inputInform));//Convert the first character of each word to uppercase
			echo $strConvert1."<br>";
			
			$strSum1 = (str_word_count($inputInform));//Count the number of words found in the string
			if ($strSum1 == 1)
			{
				echo "In a sentence ".$strSum1." word and ";
			}
			else
			{
				echo "In a sentence ".$strSum1." words and ";
			}
				
			$symbSum1 = (iconv_strlen($inputInform));// Return the length of the string
			if ($symbSum1 == 1)
			{
				echo $symbSum1." symbol."."<br>";
			}
			else
			{
				echo $symbSum1." symbols."."<br>";
			}
			return $strConvert1;
				
		}
	}
}
?>