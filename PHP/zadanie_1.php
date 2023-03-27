<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 1</title>
</head>
<body>
<?php
	    $pipeline = new Pipeline();
        $pipelineFunction = $pipeline->make(
            function($x) { return $x * 3; },
            function($x) { return $x + 1; },
            function($x) { return $x / 2; }
        );
        
        echo $pipelineFunction(3);
    ?>
</body>
</html>