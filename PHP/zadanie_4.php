<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 4</title>
</head>
<body>
<?php

        $thesaurus = array(
            "market" => array("trade"),
            "small" => array("little", "compact")
        );
        
        function getSynonyms($word) {
            global $thesaurus;
        
            if (array_key_exists($word, $thesaurus)){ 
                return json_encode(array(
                    "word" => $word,
                    "synonyms" => $thesaurus[$word]
                ));
            } else{
                return json_encode(array(
                    "word" => $word,
                    "synonyms" => array()
                ));
            }
        }
        
        // Przykłady użycia
        echo getSynonyms("market");
        echo getSynonyms("small");
        echo getSynonyms("asleast");
        
        ?>
</body>
</html>