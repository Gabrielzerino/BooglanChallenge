<?php

class Number{

    private $letterToNumber;

    public function __construct($alphabet) {
        $this->letterToNumber = $alphabet;
    }

    /*Selecting specified words and cleaning repeated*/ 
    public function select($textArr) {
        $nothing=[];
        for ($x=0; $x<count($textArr); $x++) {
            $test=$this->breakSum($textArr[$x]);
            if($test > 422224 && $test % 3 == 0 && in_array($textArr[$x],$nothing)==0) {
                array_push($nothing, $textArr[$x]);
            }
        }
        return $nothing;
    }


    /*Beaking words into letters and turning into numbers*/
    private function breakSum($a) {
        $s1 = str_split($a);
        $c1="";
        $index = 0; 
        $total=0;
        
        do {
            $c1 = $s1[$index];
            $total = $total + $this->letterToNumber[$c1]*(20**$index);
            $index++;
            
        } while ($index<count($s1));

        return $total;
    }
    
}
?>