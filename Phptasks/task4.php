<?php

Class Tezaurus {

    private $dictionary;
    
    public function __construct($dictionary) {
        $this->dictionary = $dictionary;
    }

    function getSynonyms($word) {
        $synonyms = [];
        if (array_key_exists($word, $this->dictionary)) {
            $synonyms = $this->dictionary[$word];
        } else {
            $synonyms = [];
        }
        return json_encode(array(
            "word" => $word,
            "synonyms" => $synonyms
        ));
    }
}

$tezaurus = new Tezaurus (array("market" => array("trade"), "small" => array("little", "compact")));
echo $tezaurus->getSynonyms("small");
echo $tezaurus->getSynonyms("asleast");

?>
