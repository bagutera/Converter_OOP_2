<?php 
class Uppercase extends ChangeCaseBase
{
    public function convert()
    {
        if ($this->convertTypes == "uppercase") {
            $strConvert = strtoupper($this->inputInform); // Convert all characters to uppercase
            return $strConvert;
        }
        return null;
    }
}

$case3 = new Uppercase();
$convertedString3 = $case3->convert();
if ($convertedString3 !== null) {
    $case3->displayResult($convertedString3);
}
?>