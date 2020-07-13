<?php

class Vocabulary{

    private $orderBy;

    public function __construct($alphabet)
    {
        $this->orderBy = $alphabet;
    }

    /*Sorting words by defined dictionary*/
    public function sort($textArr) {
        for ($x=0; $x<count($textArr)-1; $x++) {
            for ($y=$x+1; $y < count($textArr); $y++) {
                if($this->compare($textArr[$x],$textArr[$y])>0) {
                    $aux=$textArr[$x];
                    $textArr[$x] = $textArr[$y];
                    $textArr[$y] = $aux;
                }
                    
            }
        }
        return $textArr;
    }

    /*Cleanin repeated words*/
    public function clean($orderedVoc) {
        $nothing=[];
        for ($x=0; $x<count($orderedVoc)-1; $x++) {
            if($orderedVoc[$x]!=$orderedVoc[$x+1]) {
              array_push($nothing, $orderedVoc[$x]);
            }     
        }
        if($orderedVoc[count($orderedVoc)-1]!=$orderedVoc[count($orderedVoc)-2]) {
            array_push($nothing, $orderedVoc[$x]);
        }   
        return $nothing;
    }

    /*Comparing letters to sort words by defined dictionary*/
    private function compare($a, $b) {
        $s1 = str_split($a);
        $s2 = str_split($b);
        $c1="";
        $c2="";
        $index = 0;
        do{
            $c1 = $s1[$index];
            $c2 = $s2[$index];
            $index++;
            /*Exception for words that*/
            if ($index >= count($s1)||$index >= count($s2)) {
                if (count($s1) != count($s2) && ($this->orderBy[$c1] - $this->orderBy[$c2] == 0)) {
                    return count($s1) - count($s2);
                }
                return $this->orderBy[$c1] - $this->orderBy[$c2];
            }
        } while ($c1 == $c2);

        return $this->orderBy[$c1] - $this->orderBy[$c2];
     }

}


?>