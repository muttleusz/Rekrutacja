<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 2</title>
</head>
<body>
<?php
	    class TextInput {
            private $value = '';
          
            public function add($text){
              $this->value .= $text;
            }
          
            public function getValue(){
              return $this->value;
            }
          }
          
          class NumericInput extends TextInput{
            public function add($text) {
              if (is_numeric($text)) {
                parent::add($text);
              }
            }
          }
    ?>
</body>
</html>