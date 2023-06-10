<?php 
class LowerCase extends ChangeCaseBase
{
    public function convert()
    {
        if ($this->convertTypes == "lowerCase") {
            $strConvert = strtolower($this->inputInform); // Convert all characters to lowercase
            return $strConvert;
        }
        return null;
    }
}

$case2 = new LowerCase();
$convertedString2 = $case2->convert();
if ($convertedString2 !== null) {
    $case2->displayResult($convertedString2);
}
?>