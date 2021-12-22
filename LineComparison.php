<?php
class LineComparison {

    public $pointX1;
    public $pointX2;
    public $pointY1;
    public $pointY2;

    /**
     * getUserInput method is used to initialize variable
     */
    public function getUserInput() {
        $this->pointX1 = readline("Enter line X1 coordinates : ");
        $this->pointX2 = readline("Enter line X2 coordinates : ");
        $this->pointY1 = readline("Enter line Y1 coordinates : ");
        $this->pointY2 = readline("Enter line Y2 coordinates : ");
    }

    /**
     * lengthOfLine method is used to calculate length of line
     * @return distance
     */
    public function lengthOfLine() {
        // using pow and sqrt method
        $distance = sqrt(
            (pow(($this->pointX2 - $this->pointX1), 2)) +
                (pow($this->pointY2 - $this->pointY1, 2))
        );
        return round($distance, 2);
    }

    /**
     * checkEquality method is used to check lines equal or not
     * @param line1,line2
     */
    public function checkEquality($line1, $line2) {
        if ($line1 == $line2) {
            echo "both line length are equal";
        } elseif ($line1 > $line2) {
            echo "Line1 is Greater than Line2";
        } else
            echo "Line2 is greater than Line1";
    }
}

$calculateLength = new LineComparison();
$calculateLength->getUserInput();
$line1 = $calculateLength->lengthOfLine();
echo "Length of line1 is : " . $line1 . "\n";

$calculateLength->getUserInput();
$line2 = $calculateLength->lengthOfLine();
echo "Length of line2 is : " . $line2 . "\n";

$calculateLength->checkEquality($line1, $line2);

?>