<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>BadWords</title>
</head>
<body>
<?php
    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
    $badWordReplace = str_replace("Lorem", "***", $paragraph);

?>

        <div>
            <h1>Lunghezza paragrafo:  <?php echo strlen($paragraph) . " " . "caratteri"?> </h1>
            <p> <?php echo $paragraph //stampa del paragrafo in pagina?> </p>
        </div>

        <div>
            <h1>Lunghezza del nuovo paragrafo: <?php echo strlen($paragraph) . " " . "caratteri" ?> </h1>
            <p> <?php echo str_replace("Lorem", "* * *", $paragraph);?> </p>
        </div>

    </body>
</html>