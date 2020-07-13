<?php

class Verb{

    /*Testing if words have 8 letters*/ 
    public function has8($textArr){
        $back = [];
        foreach ($textArr as $value) {
            if (strlen($value)>=8) {
                array_push($back, $value);
            }
        }
        return $back;
    }
        
    /*Testing "bar" letters in the end of words*/       
    public function lastLetter($has8) {
        $back = [];
        foreach ($has8 as $value) {
            if (!strstr("rtcdb", $value[strlen($value)-1])) {
                array_push($back, $value);
            }
        }
        return $back;
    }

    /*Testing if words begin with "bar" letters*/    
    public function firstLetter($lastLetter) {
        $back = [];
        foreach($lastLetter as $value) {
            if(!strstr("rtcdb", $value[strlen($value)-8])) {
                array_push($back, $value);
            }
        }
        return $back;
    }
}

?>