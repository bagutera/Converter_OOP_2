<?php
interface ChangeCase
{
    public function convert();

    public function displayResult($convertedString);
}

abstract class ChangeCaseBase implements ChangeCase
{
    protected $inputInform;
    protected $convertTypes;

    public function __construct()
    {
        if (!empty($_POST['inputInform'])) {
            $this->inputInform = htmlspecialchars($_POST['inputInform'], ENT_QUOTES);
        }

        if (!empty($_POST['convertTypes'])) {
            $this->convertTypes = $_POST['convertTypes'];
        }
    }

    public function displayResult($convertedString)
    {
        echo $convertedString . "<br>";

        $strSum = str_word_count($this->inputInform);
        if ($strSum == 1) {
            echo "In a sentence " . $strSum . " word and ";
        } else {
            echo "In a sentence " . $strSum . " words and ";
        }

        $symbSum = iconv_strlen($this->inputInform);
        if ($symbSum == 1) {
            echo $symbSum . " symbol." . "<br>";
        } else {
            echo $symbSum . " symbols." . "<br>";
        }
    }
}
