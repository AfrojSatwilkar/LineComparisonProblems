<?php
class LineComparison {

    public $pointX1;
    public $pointX2;
    public $pointY1;
    public $pointY2;

    public function getUserInput() {
        $this->pointX1 = readline("Enter line X1 coordinates : ");
        $this->pointX2 = readline("Enter line X2 coordinates : ");
        $this->pointY1 = readline("Enter line Y1 coordinates : ");
        $this->pointY2 = readline("Enter line Y2 coordinates : ");
    }

    public function lengthOfLine() {
        // using Math.pow and Math.sqrt method
        $distance = sqrt(
                    (pow(($this->pointX2 - $this->pointX1), 2)) + 
                    (pow($this->pointY2 - $this->pointY1, 2)));
        return $distance;

    }
}

$calculateLength = new LineComparison();
$calculateLength->getUserInput();
echo "Length of line is : " . $calculateLength->lengthOfLine();
?>