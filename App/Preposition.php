<?php

class Preposition{

    /*Testing l letter in words*/
    public function hasl($textArr) {
        $back = [];
        foreach ($textArr as $value) {
            if (!strstr($value, "l")) {
                array_push($back, $value);
            }
        }
        return $back;
    }

    /*Testing if words have 5 letters*/ 
    public function has5($withoL) {
        $back = [];
        foreach ($withoL as $value) {
            if (strlen($value)==5) {
                array_push($back, $value);
            }
        }
        return $back;
    }

    /*Testing "bar" letters in the end of words*/       
    public function lastLetter($has5) {
        $back = [];
        foreach ($has5 as $value) {
            if (!strstr("rtcdb", $value[strlen($value)-1])) {
                array_push($back, $value);
            }
        }
        return $back;
    }
}

?>