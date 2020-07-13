<!DOCTYPE html>
<html>
<body>

<?php
require_once 'Preposition.php';
require_once 'Verb.php';
require_once 'Vocabulary.php';
require_once 'Number.php';

class Booglan {
    
    private $textArr;
    private $prep;
    private $verb;
    private $verbFirst;
    private $countPrep;
    private $countVerb;
    private $letterToNumber;
    private $orderWords;


    public function __construct($text) {
        $this->textArr = explode(" ", $text);
        $this->prep = 0;
        $this->verb = 0;
        $this->verbFirst = 0;
        $this->countPrep = new Preposition();
        $this->countVerb = new Verb();
    }

    public function getPrep() {
        $withoL = $this->countPrep->hasl($this->textArr);
        $has5 = $this->countPrep->has5($withoL);
        $this->prep = count($this->countPrep->lastLetter($has5));
        return $this->prep;
    }

    public function getVerb() {
        $has8 = $this->countVerb->has8($this->textArr);
        $this->verb = count($this->countVerb->lastLetter($has8));
        return $this->verb;
    }

    public function getVerbFirst() {
        $has8 = $this->countVerb->has8($this->textArr);
        $lastLetter = $this->countVerb->lastLetter($has8);
        $this->verb = count($this->countVerb->firstLetter($lastLetter));
        return $this->verb;
    }

    public function setVocabulary($alphabet) {
        $this->orderWords = new Vocabulary($alphabet);
    }

    public function getVocabularyOrdered() {
        $orderedVoc = $this->orderWords->sort($this->textArr);
        $orderedCleanVoc = $this->orderWords->clean($orderedVoc);
        return $orderedCleanVoc;
    }

    public function setNumber($alphabet) {
        $this->letterToNumber = new Number($alphabet);
    }

    public function getBeautyNumber() {
        $beautyNumber = $this->letterToNumber->select($this->textArr);
        return count($beautyNumber);
    }
}

 ?> 
</body>
</html>